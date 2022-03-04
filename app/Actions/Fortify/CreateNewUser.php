<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'role' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        if ($input['role'] == 'Recruiter')
        {
            return DB::transaction(function () use ($input) {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    'online' => true
                ]), function (User $user) {
                    $this->setRecruiter($user);
                });
            });
        } else {
            if ($input['role'] == 'Job Seeker')
            {
                return DB::transaction(function () use ($input) {
                    return tap(User::create([
                        'name' => $input['name'],
                        'email' => $input['email'],
                        'password' => Hash::make($input['password']),
                        'online' => true
                    ]), function (User $user) {
                        $this->setJobSeeker($user);
                    });
                });
            }
        }
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    /**
     * Set user as job seeker
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function setJobSeeker(User $user)
    {
        $team = Team::where('id', 3)->first();
        $user->teams()->attach($team);
        $user->switchTeam($team);
    }

    /**
     * Set user as recruiter
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function setRecruiter(User $user)
    {
        $team = Team::where('id', 2)->first();
        $user->teams()->attach($team);
        $user->switchTeam($team);
    }
}

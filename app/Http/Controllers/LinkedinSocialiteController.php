<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class LinkedinSocialiteController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('linkedin')->user();

            $finduser = User::where('linkedin_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('/dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id'=> $user->id,
                    'password' => encrypt('linkedin')
                ]);

                Auth::login($newUser);

                return redirect('/dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

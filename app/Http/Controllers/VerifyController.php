<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class VerifyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'id' => ['required']
        ])->validate();


        User::find($request->input('id'))->update([
            'verified' => true
        ]);
        return Redirect::route('root');
    }
}

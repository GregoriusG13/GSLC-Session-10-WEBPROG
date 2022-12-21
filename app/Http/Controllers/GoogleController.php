<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
     //Google Login

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google callback

    public function handleFacebookCallback()
    {
       $user = Socialite::driver('facebook')->user();
    }
}

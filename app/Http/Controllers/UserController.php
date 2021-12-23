<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }

    public function google()
    {
        //return 'google direct';
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        //return 'Provider Callback';
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];
        // return $data;

        $user = User::firstOrCreate(['email' => $data['email']], $data); // pengecekan apakah data email sudah ada di dalam database
        Auth::login($user, true);

        return redirect(route('welcome'));
    }
}

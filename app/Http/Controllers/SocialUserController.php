<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialUserController extends Controller
{
    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request)
    {
        $user_data = Socialite::driver('google')->user();
        // dd($request->all());

        // dd($user_data);

        // $uuid = Str::uuid()->toString();
        // dd($uuid,Hash::make($uuid.now()));

        // 註冊過直接登入,沒註冊過創建新使用者

        $g_user = User::where('email', $user_data->email)->where('user_type', '=', 'google')->first();

        // dd($g_user);

        // dd(Auth::login($g_user));

        if ($g_user) {
            Auth::login($g_user);
            return redirect('/');
        } else {
            $uuid = Str::uuid()->toString();
            $g_user = User::create([
            'name' => $user_data->name,
            'email'=> $user_data->email,
            'password' => Hash::make($uuid . now()),
            'power' =>1,
            'ac_type' =>'email',
            ]);
            $g_user->user_type = 'google';
            $g_user->save();

            Auth::login($g_user);

            return redirect('/');

        }

    }
}

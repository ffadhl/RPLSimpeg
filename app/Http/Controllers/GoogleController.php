<?php

// namespace App\Http\Controllers\Controller;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
// use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToGoogleCallback()
    {
        $user=Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }


    protected function _registerOrLoginUser($data)
    {
        $user=User::where('email','=',$data->email)->first();
        if(!$user){
            $user=new User();
            $user->name=$data->name;
            $user->email=$data->email;
            $user->google_id=$data->id;
            $user->password=bcrypt('177013');
            $user->save();
        }
        Auth::login($user);
    } 
}

    // public function handleGoogleCallback()
    // {
    //     $user = Socialite::driver('google')->user();

    //     $finduser = User::where('google_id', $user->getId())->first();
    //     if($finduser)
    //     {
    //         Auth::login($finduser);
    //         return redirect()->intended('home');
    //     }else
    //     {
    //         $newuser = User::create([
    //             'name' => $user->getName(),
    //             'email' => $user->getEmail(),
    //             'google_id' => $user->getId(),
    //             'password' => bcrypt('177013'),
    //         ]);
    //     }

//         Auth::login($newuser);
//         return redirect()->intended('home');
//     }
// }

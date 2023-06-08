<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function index (){
        if($user = Auth::user()){
            if($user->level == '1'){
                return redirect()->intended('home');
            }elseif($user->level == '2'){
                return redirect()->intended('karyawanrosati');
            }
            // return redirect()->intended('home');
        }

        return view('sesi.index');
    }

    public function proses (Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required' => 'email tidak boleh kosong',
        ]);

        $kredensial = $request->only('email', 'password');

        if(Auth::attempt($kredensial)){
            $request = session()->regenerate();
            $user = Auth::user();
            if($user->level == '1'){
                return redirect()->intended('home');
            }elseif($user->level == '2'){
                return redirect()->intended('karyawanrosati');
            }

            // if($user){
            //     return redirect()->intended('home');
            // }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Maaf, email atau Password yang anda masukkan salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/sesi');
    }

    function register()
    {
        return view("sesi/register");
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            //jika otentikasi sukses
            return redirect('home')->with('success', Auth::user() -> name .'Login berhasil');
        } else {
            //jika otentikasi gagal
            return redirect('/sesi')->withErrors('Email atau password salah');
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}

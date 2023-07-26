<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registerUser()
    {
        return view('register');
    }

    public function registerAdmin()
    {
        return view('registeradmin');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //cek login valid
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->role == 'Admin'){
                return redirect('dashboard');
            }

            if(Auth::user()->role == 'User'){
                return redirect('home');
            }

            // return redirect()->route('Home');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'login invalid');
    }

    public function registerProcessClient(Request $request)
    {
        $validated = $request-> validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required|max:255',
        ]);

        $user = New User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'User';
        $user->save();

        Session::flash('status', 'success');
        Session::flash('message', 'register berhasil');
        return redirect('register');
    }

    public function registerProcessAdmin(Request $request)
    {
        $validated = $request-> validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required|max:255',
        ]);

        $user = New User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'Admin';
        $user->save();

        Session::flash('status', 'success');
        Session::flash('message', 'register berhasil');
        return redirect('register');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}


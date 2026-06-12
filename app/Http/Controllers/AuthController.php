<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
            $data = [
                'title'     => 'Login E-Desa LG',
            ];

            return view('auth.login', $data);
        }

        public function cekLogin(Request $request)
        {
            $request->validate([
                'email'     => 'required|email',
                'password'  => 'required',
            ],[
                'email.required'    => 'Email tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!'
            ]);

            $data = [
                'email'     => $request->email,
                'password'  => $request->password,
            ];

            if(Auth::attempt($data)) {
                if(Auth::user()->role_id == 1) {
                    return redirect()->route('dashboard');
                }elseif(Auth::user()->role_id == 2) {
                    return redirect()->route('home');
                }
            }else{
                    return redirect()->route('login')->with('error','Ooops... Email atau password salah!');
                }
        }

        public function logout()
        {
            Auth::logout();

            return redirect()->route('login')->with('success','Anda berhasil logout!');
        }
    }


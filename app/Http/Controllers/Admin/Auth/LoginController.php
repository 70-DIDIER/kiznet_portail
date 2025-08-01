<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function loginform(){
        return view('admin.login');
    }
    public function login(AdminLoginRequest $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('profile');
        } else {
            return back()->withErrors([
                'error' => 'E-mail ou mot de passe invalide•s',
            ])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

       
    }
    
}

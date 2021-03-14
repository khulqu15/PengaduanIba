<?php

namespace App\Http\Controllers;

use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone = $request->phone;
            $user->level = 'user';
            $user->api_token = Str::random(10);
            $user->save();
            return redirect()->route('login');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function login(Request $request)
    {
        try {
            if(Auth::attempt($request->only('email', 'password'))) {
                $auth = Auth::user();
                $user = User::with('Response')->where('id', $auth->id)->first();
                return redirect()->route('dashboard.admin');
            }
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function loginSociety(Request $request)
    {
        try {
            $nik = $request->nik;
            $password = $request->password;
            $society = Society::where('nik', $nik)->first();
            if($society != null) {
                if(Hash::check($password, $society->password)) {
                    return $this->onSuccess('Society', $society, 'Login Success');
                } else {
                    return $this->onSuccess('Society', $society, 'Login Failed');
                }
            } else {
                return $this->onSuccess('Society', $society, 'Login Failed');
            }
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }
}

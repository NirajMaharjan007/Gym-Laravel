<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function setLogin()
    {
        return view('Login');
    }

    public function loginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('landing-page');
        } else {
            $script = "<script>
                alert('Login Failed');
            </script>";
            echo $script;
        }
    }
}
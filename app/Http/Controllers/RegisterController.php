<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function setRegister()
    {
        return view('register_form');
    }


    public function registerStore(Request $request)
    {
        $user = new User();

        $date = Carbon::now();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->created_at = $request->created_at = $date;
        $user->save();
        return redirect()->route('login');
    }
}
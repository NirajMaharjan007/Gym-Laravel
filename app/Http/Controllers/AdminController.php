<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('admin_log');
    }

    public function adminCheck(Request $request)
    {
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        } else {
            return "<i><b>Not Found</b></i>";
        }
    }
    public function adminStore(Request $request)
    {
        // dd($request);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->password = bcrypt($request->password);
        $admin->save();
        return redirect()->route('admin.log');
    }
}
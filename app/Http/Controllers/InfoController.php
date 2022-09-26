<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    // public function creatView()
    // {
    //     return view('homepage.Users.profile');
    // }

    public function createView()
    {
        $users = User::all();
        $personal = Personal::all();

        // dd($personal);
        // return view('homepage.Users.profile', compact('users', 'personal'));

        // $dob = DB::table('personals')->where('user_id', $user_id)->pluck('dob');
        return view('homepage.Users.profile', compact('users', 'personal'));
    }

    public function update(Personal $personal)
    {
        $users = User::all();
        return view('homepage.Users.edit', compact('personal', 'users'));
    }


    public function editSet(Request $request)
    {
        $personal = Personal::find($request->id);

        /*--- for picture ----*/
        if ($request->file('picture')) {
            $file = $request->file('picture');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $personal['picture'] = $filename;
        }

        $personal->phone = $request->phone;
        $personal->dob = $request->dob;
        $personal->type = $request->type;
        $personal->address = $request->address;
        $personal->residence = $request->residence;
        $personal->save();
        return redirect()->route('user.profile');
    }

    public function edit(Request $request)
    {
        /*
        $validated = $request->validate([
            'dob' => 'required',
            'address' => 'required',
            'residence' => 'required',
        ]);
       */

        $personal = new Personal();

        /* * ---- picture --- * */
        if ($request->file('picture')) {
            $file = $request->file('picture');
            $filename = date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $personal['picture'] = $filename;
        }

        $personal->phone = $request->phone;
        $personal->dob = $request->dob;
        $personal->type = $request->type;
        $personal->address = $request->address;
        $personal->residence = $request->residence;
        $personal->user_id = $request->user_id;
        $personal->save();

        return redirect()->route('user.profile');
    }

    //Updates a user names
    public function updateName($id)
    {
        $user = User::find($id);
        // return $user;
        return view('homepage.Users.change_name', ['user' => $user]);
    }

    public function changeName(Request $request)
    {
        $user = User::find($request->id);
        $date = Carbon::now();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->updated_at = $request->updated_at = $date;
        $user->save();
        return redirect()->route('user.profile');
    }
}
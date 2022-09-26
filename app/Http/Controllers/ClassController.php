<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use Carbon\Carbon;

class ClassController extends Controller
{


    public function setClasses(Request $request)
    {
        $date = Carbon::now();
        $classes = new Classes();

        $classes->class_name = $request->class_name;
        $classes->coach = $request->coach;
        $classes->user_id = $request->user_id;
        $classes->price_id = $request->price_id;
        $classes->created_at = $date;
        $classes->save();

        return redirect()->route('the_classes');
    }

    public function updateClasses(Request $request)
    {
        $date = Carbon::now();
        $classes = Classes::find($request->id);

        $classes->class_name = $request->class_name;
        $classes->coach = $request->coach;
        $classes->user_id = $request->user_id;
        $classes->price_id = $request->price_id;
        $classes->updated_at = $date;
        $classes->save();

        return redirect()->route('the_classes');
    }
}
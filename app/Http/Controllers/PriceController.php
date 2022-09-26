<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PriceController extends Controller
{
    public function setPrice(Request $request)
    {
        $price = new Price();
        $date = Carbon::now();

        $price->price = $request->price;
        $price->created_at = $date;
        $price->user_id = $request->user_id;

        $month = $request->month;
        $expiry = date('Y-m-d', strtotime($date . "+" . $month . " month"));

        $price->expired = $expiry;

        $price->save();
        return redirect()->route('pricing');
    }

    public function updatePrice(Request $request)
    {
        $price = Price::find($request->id);

        $date = Carbon::now();

        $price->id = $request->id;
        $price->price = $request->price;
        $price->updated_at = $date;
        $price->user_id = $request->user_id;

        $month = $request->month;

        $expiry = date('Y-m-d', strtotime($date . "+" . $month . " month"));

        $price->expired = $expiry;


        $price->save();
        return redirect()->route('pricing');
    }
}
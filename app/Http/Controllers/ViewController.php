<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alone;

class ViewController extends Controller
{
    //
    public function alone(Request $request)
    {
       $alones = Alone::where('id','>',0)->orderBy('created_at','desc')->get();
       return view('main.alone',['alone'=>$alones]); 
    }
    public function about(Request $request)
    {
        return view('main.about'); 
    }
    public function guestBoard(Request $request)
    {

        return view('main.guestboard');
    }
}

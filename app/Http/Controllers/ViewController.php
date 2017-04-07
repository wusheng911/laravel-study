<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alone;
use App\Models\GuestBoard;
use Illuminate\Support\Facades\Redirect;

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
        $guests = GuestBoard::where('status','0')->orderBy('created_at','desc')->get();
        return view('main.guestboard',['letters'=>$guests]);
    }
    public function addGuest(Request $request)
    {
        $letter = $request->input('letter');
        GuestBoard::create($letter);
        $guests = GuestBoard::where('status','0')->orderBy('created_at','desc')->get();
        return redirect()->route('guestboard',['letters'=>$guests]);
    }
}

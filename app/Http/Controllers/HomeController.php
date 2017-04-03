<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $musicDir = $documentRoot.'/assets/music/';
        $files=scandir($musicDir);
        $musicNames = array();
        foreach($files as $key=>$value)
        {
           $tmpArr = explode('.',$value);  
           if(array_pop($tmpArr) == 'mp3')
           {
                $musicNames[] = $value;
           }
        }
        return view('main.main',['musicList'=>$musicNames]);

    }
}

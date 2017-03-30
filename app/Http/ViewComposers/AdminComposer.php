<?php

namespace App\Http\ViewComposers; 

use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AdminComposer
{
    public function __construct()
    {
    }
    public function compose(View $view){
        $user = Auth::user(); 
        $name = $user['name'];
        $view->with('name',$name);
    }
} 

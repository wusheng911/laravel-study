<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.dashboard');
    }
    public function logout(Request $request){
        Auth::logout();
        $admin_prefix = Config('tm.admin_prefix');
        return redirect("/login");
    }
}

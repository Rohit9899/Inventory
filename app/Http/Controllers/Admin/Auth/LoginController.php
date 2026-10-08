<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function adminLogin(){
        return view('admin.login');
    }

    public function adminDashboard(){
        return view('admin.dashboard');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tampil_login()
    {
        return view('login_register.login');
    }
}

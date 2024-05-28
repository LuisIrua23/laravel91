<?php

namespace App\Http\Controllers;
use App\Models\Login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function iniciar(){
        return view ('login.logearse');
    }
    public function store(){
        $ini=new Login();
    }
}

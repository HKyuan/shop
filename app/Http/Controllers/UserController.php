<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        
    }
    
    public function getLogin()
    {
        return view('users.login',['title'=>'登入']);
    }
}

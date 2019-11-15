<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('users.login',['title'=>'登入']);
    }
    public function getUser()
    {
        
    }
    public function getRegister()
    {
        return view('users.register',['title'=>'註冊']);
    }
    public function postRegister()
    {
        $query = request()->validate([
            'email'=>'bail | required',
        ]);

        User::create($query);

        return redirect('/');
    }
}

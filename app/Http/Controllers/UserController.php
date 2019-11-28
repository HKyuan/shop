<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('users.login', ['title' => '登入']);
    }
    public function postLogin()
    {
        $query = request()->all();
        $user = User::where('email', $query["email"])
            ->where('pawd', $query["pawd"])
            ->first();
        // // dd($user);
        if (empty($user)) {
            $error = [
                'message' => ['帳號或密碼錯誤'],
            ];
            return redirect('/')->withErrors($error)->withInput();
        }
        session()->put('user_id', $user->id);

        return redirect('/user/profile');
    }
    public function getUser()
    {
        $users = User::all();
        return view('users.list', ['title' => '會員'], compact('users'));
    }
    public function getRegister()
    {
        return view('users.register', ['title' => '註冊']);
    }
    public function postRegister(UserRequest $request)
    {
        // $query = request()->validate([
        //     'email' => 'required',
        //     'nickname' => 'required',
        //     'pawd' => 'required',
        //     'phone' => 'required',
        //     'status' => 'required',
        // ]);
        $query = $request->all();

        User::create($query);

        return redirect('/');
    }
    public function getProfile()
    {
        $id = session()->get('user_id');
        $user = User::where('id', $id)->first();
        return view('users.profile', compact('user'));
    }
    public function getLogout()
    {
        session()->forget('user_id');

        return redirect('/');
    }

}

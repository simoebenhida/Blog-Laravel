<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function login(){
      return view('auth.login');
    }
    public function register(){
      return view('auth.register');
    }
    public function post_register(Request $request)
    {
        $this->validate($request,[
          'name' => 'required|max:255',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return view('index');
    }
}

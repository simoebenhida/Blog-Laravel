<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
class UserController extends Controller
{

    public function login()
    {
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
        Auth::login($user);
        return redirect()->route('home');
    }
    public function post_login(Request $request)
    {
      $this->validate($request,[
        'email'=> 'required|email',
        'password' => 'required'
      ]);
      if(Auth::attempt(['email' => $request->email ,'password' => $request->password]))
      {
        return redirect()->route('home');
      }
      else {
        Session::flash('erreur_login','Email ou Mot de passe inccorect');
        return redirect()->back();
      }
    }
    public function logout()
    {
      Auth::logout();
      return redirect()->route('home');
    }
}

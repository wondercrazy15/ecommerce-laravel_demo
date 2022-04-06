<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
   function login(Request $request){
      //   return $request->input();
      $user=User::where(['email'=>$request->email])->first();
      if(!$user || !Hash::check($request->password,$user->password))
      // if($user || Hash::check($request->password,$user->password))

      {
         return "username or password not matched...";
      }
      else{
         $request->session()->put('user',$user);
         return redirect('/');
      }
   }
   function register(Request $req){
      // return $req->input();
      $user = new User;
      $user->name=$req->username;
      $user->email=$req->email;
      $user->password=Hash::make($req->password);
      $user->save();
      return redirect('/login');
  }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function HandleLogin(Request $request){

      $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
      ]);


      $user_entered_username =  $request->username;
      $user_entered_password =  $request->password;

      $username_from_db = "";
      $password_from_db = "";


      $user = DB::select( DB::raw("SELECT username, password FROM user_account"));

      foreach($user as $u){

          $username_from_db = $u->username;
          $password_from_db = $u->password;

      }

      if($user_entered_username == $username_from_db && Hash::check($user_entered_password, $password_from_db)){

          Session::put('Session_Type', 'Admin');
          Session::put('Session_Value', $username_from_db);

          $session_type = Session::get('Session_Type');
          $session_value = Session::get('Session_Value');


          if($session_type == 'Admin'){

              return Redirect::to("/view-dashboard");
          }


      }else{

          return Redirect::to("/")->withErrors(['The username or password is incorrect.']);
      }

    }


    public function HandleLogout(){

      Session::flush();
      return Redirect('/');

    }

}

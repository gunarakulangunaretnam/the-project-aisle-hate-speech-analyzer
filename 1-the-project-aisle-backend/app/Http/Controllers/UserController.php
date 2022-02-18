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

    public function ChangePassword(Request $request){


      $session_type = Session::get('Session_Type');
      $session_value = Session::get('Session_Value');

      if($session_type == "Admin"){

          $this->validate($request, [
              'current_password' => 'required',
              'new_password' => 'required',
              'con_password' => 'required',
          ]);


          $user_entered_current_password = $request->current_password;
          $user_entered_new_password = $request->new_password;
          $user_entered_confirm_password = $request->con_password;

          $password_from_server_hash = "";

          if($user_entered_new_password == $user_entered_confirm_password){

              $user_account_data =  DB::table('user_account')->get();

              foreach($user_account_data as $u){

                 $password_from_server_hash = $u->password;

              }

              if(Hash::check($user_entered_current_password, $password_from_server_hash)){

                  $user_entered_new_password_hash = Hash::make($user_entered_new_password);

                  if(DB::table('user_account')->update(['password' => "$user_entered_new_password_hash"])){

                      return Redirect::to('/handle-logout');

                  }

              }else{

                  return Redirect::to("/view-change-password-page")->withErrors(['The current password is wrong']);
              }


          }else{

              return Redirect::to("/view-change-password-page")->withErrors(['Confirm password does not match']);

          }

      }else{

          return Redirect::to('/');
      }

    }

}

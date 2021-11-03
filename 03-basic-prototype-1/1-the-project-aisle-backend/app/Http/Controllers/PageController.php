<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DB;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function ViewLoginPageController(){

      return view('login-page');

    }

    public function ViewDashboardPageController(){

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/home-page');

      }else{

        return Redirect::to("/");

      }

    }

    public function ViewChangePasswordController(){

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/user-settings');

      }else{

        return Redirect::to("/");

      }


    }

}

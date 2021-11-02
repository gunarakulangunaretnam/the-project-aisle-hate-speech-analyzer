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


}

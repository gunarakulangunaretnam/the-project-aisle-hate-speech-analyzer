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

    public function Login(){

      return view('login-page');

    }


}

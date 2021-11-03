<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DB;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{

    public function InsertContextData(Request $request){
        
      $this->validate($request, [
        'context' => 'required',
        'description' => 'required',
      ]);


      $context =  $request->context;
      $description =  $request->description;

      if(DB::insert('INSERT INTO context_data (context, description) values ( ?, ?)', [$context, $description])){

        return redirect()->back()->with('message', 'Data Inserted Successfully.');

      }

    }


}

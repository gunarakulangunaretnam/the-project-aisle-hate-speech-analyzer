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
        
        $session_type = Session::get('Session_Type');
    
        if($session_type == "Admin"){

            $this->validate($request, [
                'context' => 'required',
            ]);


            $context =  $request->context;
            $description =  $request->description;

            if(DB::insert('INSERT INTO context_data (context, description) values ( ?, ?)', [$context, $description])){

                return redirect()->back()->with('message', 'Data Inserted Successfully.');

            }

        }else{


            return Redirect::to("/");

        }
       

    }

    public function DeleteContextDataController($auto_id){
        
        $session_type = Session::get('Session_Type');
    
        if($session_type == "Admin"){

            if(DB::table('context_data')->where('auto_id', '=', $auto_id)->delete()){

                return redirect()->back()->with('message', 'Data Deleted Successfully.');
            }
            
        }else{

            return Redirect::to("/");

        }


    }


}

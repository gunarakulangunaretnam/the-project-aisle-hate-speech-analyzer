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

    public function DeleteKeywordDataController($auto_id){

        $session_type = Session::get('Session_Type');

        if($session_type == "Admin"){

            if(DB::table('knowledgebase')->where('auto_id', '=', $auto_id)->delete()){

                return redirect()->back()->with('message', 'Data Deleted Successfully.');
            }

        }else{

            return Redirect::to("/");

        }

    }

    public function InsertKeywordDataController(Request $request){

        $session_type = Session::get('Session_Type');

        if($session_type == "Admin"){

            $this->validate($request, [
                'keyword' => 'required',
                'context_tags' => 'required',
                'language' => 'required',
            ]);

            $keyword =  $request->keyword;
            $context_tags =  $request->context_tags;
            $language =  $request->language;
            $description =  $request->description;

            if(DB::insert('INSERT INTO knowledgebase (keyword, context_tags, language, description) values ( ?, ?, ?, ?)', [$keyword, json_encode($context_tags), $language, $description])){

                return redirect()->back()->with('message', 'Data Inserted Successfully.');

            }

        }else{

            return Redirect::to("/");

        }

    }


    public function InsertSocialMediaDataController(Request $request){

        $session_type = Session::get('Session_Type');

        if($session_type == "Admin"){

            $this->validate($request, [
                'social_media' => 'required',
                'account_name' => 'required',
                'account_type' => 'required',
                'url' => 'required',
                'language' => 'required',
            ]);

            $social_media =  $request->social_media;
            $account_name =  $request->account_name;
            $account_type =  $request->account_type;
            $url          =  $request->url;
            $network_size =  $request->network_size;
            $main_user    =  $request->main_user;
            $language     =  $request->language;
            $remarks      =  $request->remarks;

            if($remarks == ""){

                $remarks = "[NULL]";
            }

            if(DB::insert('INSERT INTO social_media (social_media, account_name, account_type, url, network_size, main_user_name, language, remarks, number_of_time_tested) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$social_media, $account_name, $account_type, $url, $network_size, $main_user, $language, $remarks, "0"])){

                return redirect()->back()->with('message', 'Data Inserted Successfully.');

            }

        }else{

            return Redirect::to("/");

        }

    }

    public function DeleteSocialMediaDataController($auto_id){

        $session_type = Session::get('Session_Type');

        if($session_type == "Admin"){

            if(DB::table('social_media')->where('auto_id', '=', $auto_id)->delete()){

                return redirect()->back()->with('message', 'Data Deleted Successfully.');
            }

        }else{

            return Redirect::to("/");

        }

    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function ViewLoginPageController(){

      return view('login-page');

    }

    public function ViewDashboardPageController(){

      date_default_timezone_set('Asia/Colombo');


      $MinDate = date('Y-m-d', strtotime('-30 day', strtotime(date('Y-m-d'))));
      $MaxDate = date('Y-m-d');

      $all_data = DB::select("SELECT * FROM processed_data WHERE analyzed_date BETWEEN '$MinDate' and '$MaxDate'");

      $all_available_keywords = [];
      $all_available_keywords_with_duplicate = [];
      $all_available_keywords_with_length = [];
      $all_available_keywords_with_length_filtered_top_ten = [];

      foreach ($all_data as $key => $data) {

        $keyword_list_str = str_replace("[", "", $data->hate_keywords);
        $keyword_list_str = str_replace("]", "", $keyword_list_str);

        if (strpos($keyword_list_str, ',') == true) {

            $keyword_pieces = explode(",", $keyword_list_str);
            #print_r ($keyword_pieces);

            foreach ($keyword_pieces as $key => $peice) {

              if(in_array(trim($peice), $all_available_keywords) == false){

                array_push($all_available_keywords,trim($peice));

              }

              array_push($all_available_keywords_with_duplicate,trim($peice));

            }


        }else{

          if(in_array(trim($keyword_pieces), $all_available_keywords) == false){

            array_push($all_available_keywords,trim($keyword_pieces));

          }

          array_push($all_available_keywords_with_duplicate,trim($peice));

        }
      }


      foreach ($all_available_keywords as $key => $data) {

        $temp_data = $data;
        $temp_length = 0;

        foreach ($all_available_keywords_with_duplicate as $key => $sub_data) {

          if($temp_data == $sub_data){

            $temp_length = $temp_length + 1;

          }

        }

        $all_available_keywords_with_length[$temp_data] = $temp_length;

      }

      //print_r($all_available_keywords_with_length);

      $number_of_times_to_run = 0;

      if(count($all_available_keywords_with_length) < 10){

        $number_of_times_to_run = count($all_available_keywords_with_length);

      }else{

        $number_of_times_to_run = 10;

      }


      for ($i = 1; $i <= $number_of_times_to_run; $i++) {

        $key = array_search(max($all_available_keywords_with_length), $all_available_keywords_with_length);
        $all_available_keywords_with_length_filtered_top_ten[$key] = $all_available_keywords_with_length[$key];
        unset($all_available_keywords_with_length[$key]);

      }

      print_r($all_available_keywords_with_length_filtered_top_ten);


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

    public function ViewKeywordManagementController(){

      $all_context_names = DB::select("SELECT context FROM context_data");

      $keyword_data =  DB::table('knowledgebase')->get();

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/keyword-management')->with(['all_context_names'=>$all_context_names, 'keyword_data' => $keyword_data]);

      }else{

        return Redirect::to("/");

      }

    }

    public function ViewContextManagementController(){

      $session_type = Session::get('Session_Type');

      $context_data = DB::table('context_data')->get();

      if($session_type == "Admin"){

        return view('dashboard/context-management')->with('context_data', $context_data);

      }else{

        return Redirect::to("/");

      }


    }

    public function ViewSocialMediaManagementController(){

      $session_type = Session::get('Session_Type');

      $social_media_data = DB::table('social_media')->get();

      if($session_type == "Admin"){

        return view('dashboard/social-media-management')->with('social_media_data', $social_media_data);

      }else{

        return Redirect::to("/");

      }

    }

    public function ViewSocialMediaDataEditPageController($auto_id){

        $session_type = Session::get('Session_Type');

        $social_mediaind_ividual_data = DB::table('social_media')->where('auto_id', '=', $auto_id)->get();

        if($session_type == "Admin"){

          return view('dashboard/social-media-data-edit')->with('social_mediaind_ividual_data', $social_mediaind_ividual_data);

        }else{

          return Redirect::to("/");

        }


    }

}

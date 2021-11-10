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

    public function TopTenKeywordsProcessing($Language){

      date_default_timezone_set('Asia/Colombo'); // Set time zome as Colombo.


      $MinDate = date('Y-m-d', strtotime('-30 day', strtotime(date('Y-m-d'))));   //Get Current date and subtract 30 days from it.
      $MaxDate = date('Y-m-d'); // Max date

      $all_data = DB::select("SELECT * FROM processed_data, social_media WHERE processed_data.account_id = social_media.account_name AND social_media.language = '$Language' AND analyzed_date BETWEEN '$MinDate' AND '$MaxDate' AND result = '[HATE]'"); // SQL-CODE

      $all_available_keywords = [];                 //  Store all keywords without duplication
      $all_available_keywords_with_duplicate = []; //   Store all keywords with duplication

      $all_available_keywords_with_length = [];   //   Associative array that contains all keywords with length.
      $all_available_keywords_with_length_filtered_top_ten = []; //Store filtered top ten keywords.

      foreach ($all_data as $key => $data) {          // Loop all data from datababse.

        $keyword_list_str = str_replace("[", "", $data->hate_keywords);  // Remove [
        $keyword_list_str = str_replace("]", "", $keyword_list_str);    //  Remove ]

        if (strpos($keyword_list_str, ',') == true) {          // Check whether the string contains (,). if it contains, that means it has multiple values.

            $keyword_pieces = explode(",", $keyword_list_str);  // Split the string  by comma

            foreach ($keyword_pieces as $key => $peice) {      // Loop the pieces

              if(in_array(trim($peice), $all_available_keywords) == false){  // all_available_keywords does not contain, enter the keyword. This is to avoid duplication.

                array_push($all_available_keywords,trim($peice));   // Push the keyword to all_available_keywords array.

              }

              array_push($all_available_keywords_with_duplicate,trim($peice));  // No filter here, therefore, all keywords will be enterd with dulication.

            }

        }else{ // if no comma, that means, there is only one element.

          if(in_array(trim($keyword_pieces), $all_available_keywords) == false){ // Check if it already in the all_available_keywords. if does not, then

            array_push($all_available_keywords,trim($keyword_pieces));  // Add the keyword to the list.

          }

          array_push($all_available_keywords_with_duplicate,trim($keyword_pieces));  // Add the keyword to the duplication array.

        }
      }


      foreach ($all_available_keywords as $key => $data) {     // Loop the all_available_keywords that does not have dulications.

        $temp_data = $data;   // Store one keyword to the tamp variable.
        $temp_length = 0;    // Create a variable as 0.

        foreach ($all_available_keywords_with_duplicate as $key => $sub_data) {  // Loop all_available_keywords_with_duplicate to check how many times that particalr keyword exist.

          if($temp_data == $sub_data){ // If the temp keyword is equal to the $sub_data keyword.

            $temp_length = $temp_length + 1; // Then increase by one.

          }

        }

        $all_available_keywords_with_length[$temp_data] = $temp_length; // Store keyword with length Ex: Apple 2

      }

      //print_r($all_available_keywords_with_length);

      $number_of_times_to_run = 0;

      if(count($all_available_keywords_with_length) < 10){ // If all_available_keywords_with_length less than 10, then number of times to run is as usual.

        $number_of_times_to_run = count($all_available_keywords_with_length);

      }else{ // Otherwise, it is ten.

        $number_of_times_to_run = 10;

      }

      $total_number_of_keywords = 0;

      for ($i = 1; $i <= $number_of_times_to_run; $i++) { // Loop based on number_of_times_to_run

        $key = array_search(max($all_available_keywords_with_length), $all_available_keywords_with_length);  // Get max number, then get the key of it.
        $all_available_keywords_with_length_filtered_top_ten[$key] = $all_available_keywords_with_length[$key];

        $total_number_of_keywords = $total_number_of_keywords + $all_available_keywords_with_length[$key]; // Add total keywords to calculate the percentage.

        unset($all_available_keywords_with_length[$key]);  // Remove the max to find the next max number

      }

      $final_array = [];

      foreach ($all_available_keywords_with_length_filtered_top_ten as $key => $data) {  // Checking percentage

        $per = ($data / $total_number_of_keywords) * 100;

        array_push($final_array,[$key, $data,$per]);

      }

      return [$final_array];

    }

    public function TopTenHateSpeechSpreadersProcessing($Language){

      $MinDate = date('Y-m-d', strtotime('-30 day', strtotime(date('Y-m-d'))));   //Get Current date and subtract 30 days from it.
      $MaxDate = date('Y-m-d'); // Max date

      $all_available_hate_speech_spreaders = [];                    //  Store all hate speech spreaders without duplication
      $all_available_hate_speech_spreaders_with_duplicate = [];    //   Store all hate speech spreaders with duplication

      $all_available_hate_speech_spreaders_with_length = [];      //   Associative array that contains all hate_speech_spreaders with length.
      $all_available_hate_speech_spreaders_with_length_filtered_top_ten = [];  //Store hate_speech_spreaders top ten keywords.

      $all_data1 = DB::select("SELECT DISTINCT processed_data.account_id FROM processed_data, social_media WHERE processed_data.account_id = social_media.account_name AND social_media.language = '$Language' AND analyzed_date BETWEEN '$MinDate' AND '$MaxDate' AND result = '[HATE]'"); // SQL-CODE

      foreach ($all_data1 as $key => $data) {

          array_push($all_available_hate_speech_spreaders, $data->account_id); // Rem

      }

      $all_data2 = DB::select("SELECT processed_data.account_id FROM processed_data, social_media WHERE processed_data.account_id = social_media.account_name AND social_media.language = '$Language' AND analyzed_date BETWEEN '$MinDate' AND '$MaxDate' AND result = '[HATE]'"); // SQL-CODE

      foreach ($all_data2 as $key => $data) {

          array_push($all_available_hate_speech_spreaders_with_duplicate, $data->account_id); // Rem

      }

      foreach ($all_available_hate_speech_spreaders as $key => $data) {

        $temp_data = $data;   // Store one keyword to the tamp variable.
        $temp_length = 0;    // Create a variable as 0.


        foreach ($all_available_hate_speech_spreaders_with_duplicate as $key => $sub_data) {

          if($temp_data == $sub_data){

            $temp_length = $temp_length + 1;

          }

        }

        $all_available_hate_speech_spreaders_with_length[$temp_data] = $temp_length;

      }

      $number_of_times_to_run = 0;

      if(count($all_available_hate_speech_spreaders_with_length) < 10){ // If all_available_keywords_with_length less than 10, then number of times to run is as usual.

        $number_of_times_to_run = count($all_available_hate_speech_spreaders_with_length);

      }else{ // Otherwise, it is ten.

        $number_of_times_to_run = 10;

      }

      $total_number_of_hate_speech_spreaders = 0;

      for ($i = 1; $i <= $number_of_times_to_run; $i++) { // Loop based on number_of_times_to_run

        $key = array_search(max($all_available_hate_speech_spreaders_with_length), $all_available_hate_speech_spreaders_with_length);  // Get max number, then get the key of it.
        $all_available_hate_speech_spreaders_with_length_filtered_top_ten[$key] = $all_available_hate_speech_spreaders_with_length[$key];

        $total_number_of_hate_speech_spreaders = $total_number_of_hate_speech_spreaders + $all_available_hate_speech_spreaders_with_length[$key]; // Add total keywords to calculate the percentage.

        unset($all_available_hate_speech_spreaders_with_length[$key]);  // Remove the max to find the next max number

      }

      $final_array = [];

      foreach ($all_available_hate_speech_spreaders_with_length_filtered_top_ten as $key => $data) {  // Checking percentage

        $per = ($data / $total_number_of_hate_speech_spreaders) * 100;

        array_push($final_array,[$key, $data,$per]);

      }

      print_r($final_array);

      return [$final_array];

    }

    public function ViewDashboardPageController(){

      $SinhalaKeywordsData = $this->TopTenKeywordsProcessing("Sinhala");
      $TamilKeywordsData   = $this->TopTenKeywordsProcessing("Tamil");

      $SinhalaHateSpeechSpreadersData = $this->TopTenHateSpeechSpreadersProcessing("Sinhala");
      $TamilHateSpeechSpreadersData   = $this->TopTenHateSpeechSpreadersProcessing("Tamil");


      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/home-page')->with(["SinhalaKeywordsData" => $SinhalaKeywordsData, "TamilKeywordsData" => $TamilKeywordsData, "SinhalaHateSpeechSpreadersData" => $SinhalaHateSpeechSpreadersData, "TamilHateSpeechSpreadersData" => $TamilHateSpeechSpreadersData]);

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

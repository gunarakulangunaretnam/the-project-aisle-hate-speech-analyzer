@extends('layouts.base-template')
@section('content')


<div class="jumbotron">

    <h3 style="text-align:center;">Insert Account Details</h3>
    <hr class="my-4">

    <form action="/edit-social-media-data/{{$social_mediaind_ividual_data[0]->auto_id}}" class="login100-form validate-form" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group row">
            <label for="social_media" class="col-sm-2 col-form-label">Social Media</label>
            <div class="col-sm-10">
            <select class="form-control" id="social_media" name="social_media" style="color:black;"  required>
                <option>Facebook</option>
                <option>Twitter</option>
                <option>Instagram</option>
                <option>Youtube</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          <label for="account_name" class="col-sm-2 col-form-label">Account Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Name" value="{{$social_mediaind_ividual_data[0]->account_name}}" required>
          </div>
        </div>

        <div class="form-group row">
            <label for="account_type" class="col-sm-2 col-form-label">Account Type</label>
            <div class="col-sm-10">
            <select class="form-control" id="account_type" name="account_type" style="color:black;" required>
                <option>Page</option>
                <option>Profile</option>
                <option>Other</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          <label for="url" class="col-sm-2 col-form-label">URL</label>
          <div class="col-sm-10">
            <input type="text" value="{{$social_mediaind_ividual_data[0]->url}}" class="form-control" id="url" name="url" placeholder="URL" required>
          </div>
        </div>


        <div class="form-group row">
          <label for="network_size" class="col-sm-2 col-form-label">Network Size</label>
          <div class="col-sm-10">
            <input type="text" value="{{$social_mediaind_ividual_data[0]->network_size}}" class="form-control" id="network_size" name="network_size" placeholder="Network Size">
          </div>
        </div>

        <div class="form-group row">
          <label for="main_user" class="col-sm-2 col-form-label">Main User</label>
          <div class="col-sm-10">
            <input type="text" value="{{$social_mediaind_ividual_data[0]->main_user_name == '[NULL]' ? "" : $social_mediaind_ividual_data[0]->main_user_name}}" class="form-control" id="main_user" name="main_user" placeholder="Main User">
          </div>
        </div>


        <div class="form-group row">
            <label for="language" class="col-sm-2 col-form-label">Language</label>
            <div class="col-sm-10">
            <select class="form-control" id="language" name="language" style="color:black;" required>
                <option>Sinhala</option>
                <option>Tamil</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
          <div class="col-sm-10">
            <textarea placeholder="remarks" class="form-control" id="remarks" name="Remarks" rows="3">{{$social_mediaind_ividual_data[0]->remarks == "[NULL]" ? "" : $social_mediaind_ividual_data[0]->remarks }}</textarea>
          </div>
        </div>

        <input type="submit" value="Update" class="btn btn-success btn-lg btn-block">

    </form>

</div>

<script>

    window.onload = function(){

      var social_media = "{{$social_mediaind_ividual_data[0]->social_media}}";
      var account_type = "{{$social_mediaind_ividual_data[0]->account_type}}";
      var language = "{{$social_mediaind_ividual_data[0]->language}}";


      if(social_media == "Facebook"){

        document.getElementById("social_media").selectedIndex = 0;

      }else if(social_media == "Twitter"){

        document.getElementById("social_media").selectedIndex = 1;

      }else if(social_media == "Instagram"){

        document.getElementById("social_media").selectedIndex = 2;

      }else if(social_media == "Youtube"){

        document.getElementById("social_media").selectedIndex = 3;

      }

      if(account_type == "Page"){

        document.getElementById("account_type").selectedIndex = 0;

      }else if(account_type == "Profile"){

        document.getElementById("account_type").selectedIndex = 1;

      }else if(account_type == "Other"){

        document.getElementById("account_type").selectedIndex = 2;

      }

      if(language == "Sinhala"){

        document.getElementById("language").selectedIndex = 1;

      }else if(language == "Tamil"){

        document.getElementById("language").selectedIndex = 0;

      }

    }

</script>

@endsection

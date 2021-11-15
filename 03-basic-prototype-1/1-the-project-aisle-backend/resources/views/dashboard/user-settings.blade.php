@extends('layouts.base-template')

@section('content')


<div style="width:100%; height:100px;">

@if($errors->any())
		@foreach ($errors->all() as $error)

        <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
                    <strong>{!!$error!!}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            <script>

                window.onload=function(){

                    $("#errorBox").delay(3000).fadeOut("slow");

                }

            </script>

		@endforeach
@endif


</div>

<div class="jumbotron">
        <h4 style="text-align:center;">Password Settings</h4>
        <hr class="my-4">

        <form action="/change-password" class="login100-form validate-form" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group row">
              <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" required>
              </div>
            </div>

            <div class="form-group row">
                <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="con_password" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirm Password" required>
                </div>
            </div>


            <input type="submit" value="Change Password" class="btn btn-success btn-lg btn-block">

        </form>

</div>

@endsection

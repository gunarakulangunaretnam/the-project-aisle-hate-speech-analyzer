@extends('layouts.base-template')
@section('content')
   

    <div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
        <div class="card-body">
            <p class="fs-30 mb-2" style="text-align:center;">Social Media Manegement</p>
        </div>
    </div>

    <div style="width:100%; height:auto;">

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    
                    <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
                        <strong>{!!$error!!}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <script>
                    
                        setTimeout(
                        function() 
                        {
                            $("#errorBox").delay(3000).fadeOut("slow");

                        }, 1000);

                    </script>

                @endforeach
            @endif


        @if(session()->has('message'))

            <div id="successBox" style="text-align:center;margin-top:20px;" class="alert alert-success col-md-12 alert-dismissible fade show" role="alert">
                        <strong> {{ session()->get('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
            </div>

            <script>
                    
                    setTimeout(
                    function() 
                    {
                        $("#successBox").delay(3000).fadeOut("slow");

                    }, 1000);

            </script>

        @endif

    </div>


    <div class="jumbotron">

        <h3 style="text-align:center;">Insert Account Details</h3>
        <hr class="my-4">
  				
        <form action="/insert-social-media-data" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
        
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="social_media" class="col-sm-2 col-form-label">Social Media</label>
                <div class="col-sm-10">
                <select class="form-control" id="social_media" name="social_media" style="color:black;" required>
                    <option value="" selected disabled hidden>Choose here</option>
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
                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="Account Name" required>
              </div>
            </div>

            <div class="form-group row">
                <label for="account_type" class="col-sm-2 col-form-label">Account Type</label>
                <div class="col-sm-10">
                <select class="form-control" id="account_type" name="account_type" style="color:black;" required>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option>Page</option>
                    <option>Profile</option>
                    <option>Other</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
              <label for="url" class="col-sm-2 col-form-label">URL</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="url" name="url" placeholder="URL" required>
              </div>
            </div>

           
            <div class="form-group row">
              <label for="network_size" class="col-sm-2 col-form-label">Network Size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="network_size" name="network_size" placeholder="Network Size">
              </div>
            </div>

            <div class="form-group row">
              <label for="main_user" class="col-sm-2 col-form-label">Main User</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="main_user" name="main_user" placeholder="Main User">
              </div>
            </div>
         

            <div class="form-group row">
                <label for="language" class="col-sm-2 col-form-label">Language</label>
                <div class="col-sm-10">
                <select class="form-control" id="language" name="language" style="color:black;" required>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option>Sinhala</option>
                    <option>Tamil</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
              <label for="remarks" class="col-sm-2 col-form-label">Remarks</label>
              <div class="col-sm-10">
                <textarea placeholder="remarks" class="form-control" id="remarks" name="Remarks" rows="3"></textarea>
              </div>
            </div>

            <input type="submit" value="Add" class="btn btn-success btn-lg btn-block">

        </form>
        
    </div>

    <div style="overflow-x:auto;">

        <table class="table table-hover" style="background-color:#e9ecef; color:black; margin-bottom:3%;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Social Media</th>
                    <th scope="col">Account Name</th>
                    <th scope="col">Account Type</th>
                    <th scope="col">URL</th>
                    <th scope="col">Network Size</th>
                    <th scope="col">Main User</th>
                    <th scope="col">Language</th>
                    <th scope="col">No.of.T Tested</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody> 
                    @foreach ($social_media_data as $key => $data)

                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{$data->social_media}}</td>
                            <td>{{$data->account_name}}</td>
                            <td>{{$data->account_type}}</td>
                            <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">{{$data->url}}</td>
                            <td>{{$data->network_size}}</td>
                            <td>{{$data->main_user_name}}</td>
                            <td>{{$data->language}}</td>
                            <td>{{$data->number_of_time_tested}}</td>
                            <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">{{$data->remarks}}</td>
                            <td><a class="btn btn-danger btn-sm confirmation" href="/delete-keyword-data/{{$data->auto_id}}">Delete</a> <a class="btn btn-success btn-sm confirmation" href="/delete-keyword-data/{{$data->auto_id}}">Edit</a></td>
                        </tr>

                    @endforeach
            </tbody>
        </table>
    </div>

    <script>

        window.onload = function(){
            
            $(".chosen-select").chosen({
                no_results_text: "Oops, nothing found!"
            })

            $('.confirmation').on('click', function () {
                return confirm('Are you sure to delete?');
            });
            
        } 

    </script>

@endsection
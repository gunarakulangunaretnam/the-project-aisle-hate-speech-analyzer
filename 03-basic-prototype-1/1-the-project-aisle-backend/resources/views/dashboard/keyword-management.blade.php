@extends('layouts.base-template')
@section('content')
   

    <div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
        <div class="card-body">
            <p class="fs-30 mb-2" style="text-align:center;">Keyword Manegement</p>
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

        <h3 style="text-align:center;">Insert Keywords</h3>
        <hr class="my-4">
  				
        <form action="/insert-keyword-data" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
        
            {{ csrf_field() }}

            <div class="form-group row">
              <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Keyword" required>
              </div>
            </div>

            <div class="form-group row">
                <label for="context_tags" class="col-sm-2 col-form-label">Context Tags</label>
                <div class="col-sm-10">
                    <select style="height:300px; !important" data-placeholder="Context Tags" id="context_tags" name="context_tags[]" multiple class="chosen-select form-control" required>
                        
                        <option value=""></option>

                        @foreach ($all_context_names as $key => $data)
    
                            <option>{{$data->context}}</option>

                        @endforeach
                        
                    </select>
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
              <label for="description" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <textarea placeholder="Description" class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
            </div>

            <input type="submit" value="Add" class="btn btn-success btn-lg btn-block">

        </form>
        
    </div>


    <table class="table table-hover" style="background-color:#e9ecef; color:black; margin-bottom:3%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Keyword</th>
                <th scope="col">Context Tags</th>
                <th scope="col">Language</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody> 
                @foreach ($keyword_data as $key => $data)

                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{$data->keyword}}</td>
                        <td>{{$data->context_tags}}</td>
                        <td>{{$data->language}}</td>
                        <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">{{$data->description}}</td>
                        <td><a class="btn btn-danger btn-sm confirmation" href="/delete-keyword-data/{{$data->auto_id}}">Delete</a></td>
                    </tr>

                @endforeach
        </tbody>
    </table>

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
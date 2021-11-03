@extends('layouts.base-template')
@section('content')

    <div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
        <div class="card-body">
            <p class="fs-30 mb-2" style="text-align:center;">Context Manegement</p>
        </div>
    </div>

    <div class="jumbotron">

        <h3 style="text-align:center;">Insert Context</h3>
        <hr class="my-4">
  				
        <form action="/change-password" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
        
            {{ csrf_field() }}

            <div class="form-group row">
              <label for="context" class="col-sm-2 col-form-label">Context</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="context" name="context" placeholder="Context" required>
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
                <th scope="col">Context</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>
           

        </tbody>
    </table>


    <script>

        window.onload = function(){
            $(".chosen-select").chosen({
                no_results_text: "Oops, nothing found!"
            })
        } 

    </script>

@endsection
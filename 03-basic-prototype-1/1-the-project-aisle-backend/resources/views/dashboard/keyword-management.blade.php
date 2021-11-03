@extends('layouts.base-template')
@section('content')

    <div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
        <div class="card-body">
            <p class="fs-30 mb-2" style="text-align:center;">Keyword Manegement</p>
        </div>
    </div>

    <div class="jumbotron">

        <h3 style="text-align:center;">Insert Keywords</h3>
        <hr class="my-4">
  				
        <form action="/change-password" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
        
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
                    <select style="height:300px; !important" data-placeholder="Context Tags" id="context_tags" name="context_tags" multiple class="chosen-select form-control" name="test">
                        <option value=""></option>
                        <option>American Black Bear</option>
                        <option>Asiatic Black Bear</option>
                        <option>Brown Bear</option>
                        <option>Giant Panda</option>
                        <option>Sloth Bear</option>
                        <option>Sun Bear</option>
                        <option>Polar Bear</option>
                        <option>Spectacled Bear</option>
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
            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td style="vertical-align: middle; line-height: 1; white-space: normal; line-height:120%;">This is used to expose sexual <br> This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr>

            <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr> <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr> <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr> <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr> <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
                <td><a class="btn btn-danger btn-sm">Delete</a>&nbsp; <button class="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></td>
            </tr> <tr>
                <th scope="row">1</th>
                <td>Bad word</td>
                <td>Bad words</td>
                <td>English</td>
                <td>This is used to expose sexual This is used to expose sexualThis is used to exposedsajdlksa</td>
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
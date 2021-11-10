@extends('layouts.base-template')

@section('content')

<div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
    <div class="card-body">
        <p class="fs-30 mb-2" style="text-align:center;">Sinhala Language Top 10 Trendings</p>
    </div>
</div>

<div class="row" style="margin-top:2%; margin-left:2%; margin-right:2%;">

<div class="col-md-6 grid-margin">
      <div class="card" style="background-color:#ebeff5;">
        <div class="card-body">

        <p class="card-title" style="text-align:center;">Top 10 Hate Speech Spreaders</p>

          <hr>

          <ul class="icon-data-list" style="width:100%;">

            @foreach($SinhalaHateSpeechSpreadersData as $data)
                @foreach($data as $sub_data)

                  <li>

                    <div class="d-flex">
                      <div class="flex-grow-1 mr-1" style="margin-top:2.7%; margin-left:-2%; text-align:center; font-weight:bold;">

                        {{ $loop->index != 9 ?  '0'.$loop->index+1 : $loop->index+1 }}

                      </div>
                      <img style="margin-left:1.5%;" src="{{asset('dashboard-page-asset')}}/images/faces/default.jpg" alt="user">
                      <div style="width:100%;">
                          <p class="text-info mb-1">{{$sub_data[0]}}</p>

                            <div class="progress progress-md flex-grow-1 mr-11">
                                  <div class="progress-bar bg-inf0" role="progressbar" style="width: {{$sub_data[2]}}%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          <p class="mb-0" style="margin-top:1%;">{{$sub_data[1]}} (Times)</p>
                      </div>
                    </div>
                  </li>

                @endforeach
            @endforeach

          </ul>

        </div>
      </div>
    </div>

    <div class="col-md-6 grid-margin">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" style="background-color:#ebeff5;">
                      <div class="card-body">
                          <p class="card-title" style="text-align:center;">Top 10 Trending Words</p>
                          <hr>
                          <div class="charts-data row">

                          @foreach($SinhalaKeywordsData as $data)
                              @foreach($data as $sub_data)


                                <div class="mt-4 flex-grow-1 col-md-2" style="margin-top:2.7%; margin-left:-2%; font-weight:bold;">

                                  {{ $loop->index != 9 ?  '0'.$loop->index+1 : $loop->index+1 }}

                                </div>

                                <div class="mt-2 col-md-10" style="margin-left:-5%;">
                                    <p class="mb-1">{{$sub_data[0]}}</p>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                      <div class="progress progress-md flex-grow-1">
                                          <div class="progress-bar bg-inf0" role="progressbar" style="width: {{$sub_data[2]}}%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>

                                    </div>
                                    <p class="mb-0">{{$sub_data[1]}} (Repeated)</p>
                                </div>



                              @endforeach
                          @endforeach

                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div class="card card-tale" style="background-color:#e9ecef; color:black; margin-bottom:2%;  margin-top:2%;">
    <div class="card-body">
        <p class="fs-30 mb-2" style="text-align:center;">Tamil Language Top 10 Trendings</p>
    </div>
</div>

<div class="row" style="margin-top:2%; margin-left:2%; margin-right:2%;">

<div class="col-md-6 grid-margin">
      <div class="card" style="background-color:#ebeff5;">
        <div class="card-body">
          <p class="card-title" style="text-align:center;">Top 10 Hate Speech Spreaders</p>

          <hr>

          <ul class="icon-data-list" style="width:100%;">

            @foreach($TamilHateSpeechSpreadersData as $data)
                @foreach($data as $sub_data)

                  <li>

                    <div class="d-flex">
                      <div class="flex-grow-1 mr-1" style="margin-top:2.7%; margin-left:-2%; text-align:center; font-weight:bold;">

                        {{ $loop->index != 9 ?  '0'.$loop->index+1 : $loop->index+1 }}

                      </div>
                      <img style="margin-left:1.5%;" src="{{asset('dashboard-page-asset')}}/images/faces/default.jpg" alt="user">
                      <div style="width:100%;">
                          <p class="text-info mb-1">{{$sub_data[0]}}</p>

                            <div class="progress progress-md flex-grow-1 mr-11">
                                  <div class="progress-bar bg-inf0" role="progressbar" style="width: {{$sub_data[2]}}%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          <p class="mb-0" style="margin-top:1%;">{{$sub_data[1]}} (Times)</p>
                      </div>
                    </div>
                  </li>

                @endforeach
            @endforeach

          </ul>

        </div>
      </div>
    </div>

    <div class="col-md-6 grid-margin">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" style="background-color:#ebeff5;">

                        <div class="card-body">
                          <p class="card-title" style="text-align:center;">Top 10 Trending Words</p>
                          <hr>
                          <div class="charts-data row">

                          @foreach($TamilKeywordsData as $data)
                              @foreach($data as $sub_data)


                                <div class="mt-4 flex-grow-1 col-md-2" style="margin-top:2.7%; margin-left:-2%; font-weight:bold;">

                                  {{ $loop->index != 9 ?  '0'.$loop->index+1 : $loop->index+1 }}

                                </div>

                                <div class="mt-2 col-md-10" style="margin-left:-5%;">
                                    <p class="mb-1">{{$sub_data[0]}}</p>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                      <div class="progress progress-md flex-grow-1">
                                          <div class="progress-bar bg-inf0" role="progressbar" style="width: {{$sub_data[2]}}%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>

                                    </div>
                                    <p class="mb-0">{{$sub_data[1]}} (Repeated)</p>
                                </div>



                              @endforeach
                          @endforeach

                          </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

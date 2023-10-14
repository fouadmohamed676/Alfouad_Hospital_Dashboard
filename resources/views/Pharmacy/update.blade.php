@extends('include.master')
@section('content')
<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <div class="black">
                            تعديل | بيانات
                            <i class="fa fa-angle-double-down"></i>
                        </div>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <div class="form-panel">
                            <div class="form">
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('pharamcy/save_update/'.$pharamcy->id)}}">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                                @csrf
                               @method('put')
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">Name</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$pharamcy->name}}" name="name" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="lastname" class="control-label col-lg-2">Title</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="lastname" required value="{{$pharamcy->title}}"  name="title" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-2">Title</label>
                                    <div class="col-lg-10">
                                      <input class=" form-control" id="lastname" required value="{{$pharamcy->time_work}}"  name="title" type="text" />
                                    </div>
                                  </div>

                                <div class="form-group ">
                                    <label for="phone" class="control-label col-lg-2">Phone</label>
                                    <div class="col-lg-10">
                                      <input class="form-control" value="{{$pharamcy->phone}}" required id="phone" name="phone" type="number" />
                                    </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button class="btn btn-danger" type="button">Cancel</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<head>
    <title>
       تعديل بيانات | {{$pharamcy->name}}
    </title>
</head>

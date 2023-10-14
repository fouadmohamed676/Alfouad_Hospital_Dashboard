@extends('include.master')
@section('content')


  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Update Doctor </h3>

      <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> Advanced Form Validations</h4>
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
                  <label for="username" class="control-label col-lg-2">Specialization</label>
                  <div class="col-lg-10">
                    <select class="form-control"  value="{{$pharamcy->specialization_id}}"  name="specialization_id">
                        @foreach($speci as $hospitals)
                        <option value="{{$hospitals->id}}" {{$hospitals->id == $pharamcy->specialization_id  ? "Selected":"" }}>
                            {{$hospitals->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="gender" class="control-label col-lg-2">gender</label>
                  <div class="col-lg-10">
                    <select class="form-control" required value="{{$pharamcy->gender}}"  name="gender">
                        {{-- <option value="" selected disabled>Select Gender</option> --}}
                        <option value="male" {{ ($pharamcy->gender=="male" ? "Selected":"" )}}>Male</option>
                        <option value="female" {{ ($pharamcy->gender=="female" ? "Selected":"" )}}>Female</option>
                      </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="name" class="control-label col-lg-2">Hospital</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="resoureceName">

                        @foreach($hospital as $hospitals)
                        <option value="{{$hospitals->dis}}" {{$hospitals->id == $hospitals->hospital_id  ? "Selected":""}}>
                            {{$hospitals->dis}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="email" class="control-label col-lg-2">Email</label>
                  <div class="col-lg-10">
                    <input class="form-control " id="email" value="{{$pharamcy->email}}" name="email" type="email" />
                  </div>
                </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Nationality </label>
                    <div class="col-lg-10">
                      <select class="form-control" name="nationality_id">
                          @foreach($nation as $nationality)
                          <option value="{{$nationality->id}}"{{$pharamcy->id == $pharamcy->nationality_id  ?  "selected" : ""}}>{{$nationality->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">Phone</label>
                    <div class="col-lg-10">
                      <input class="form-control" value="{{$pharamcy->phone}}" required id="phone" name="phone" type="number" />
                    </div>
                  </div>
                <div class="form-group ">
                  <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                  <div class="col-lg-10 col-sm-9">
                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="newsletter" class="control-label col-lg-2 col-sm-3">Receive the Newsletter</label>
                  <div class="col-lg-10 col-sm-9">
                    <input type="checkbox" style="width: 20px" class="checkbox form-control" id="newsletter" name="newsletter" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Save</button>
                    <button class="btn btn-theme04" type="button">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
@endsection
<head>
    <title>
       Update Doctor
    </title>
</head>

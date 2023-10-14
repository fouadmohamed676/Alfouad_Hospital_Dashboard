@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الاسم</th>
                  <th class="hidden-phone">العنوان</th>
                  <th class="hidden-phone">مواعيد العمل</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($doctors as $index=>$pharamcy)
                <tr class="gradeA">
                  <td></td>
                  <td><b>{{$pharamcy->doctors->name}}</b></td>
                  <td class="hidden-phone">{{$pharamcy->doctors->title}}</td>
                  <td class="center hidden-phone">{{$pharamcy->doctors->phone}}</td>


                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    <div class="form-panel">
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('hospital.addDoctors')}}">
         @csrf
         <div class="form-group">
          <label for="name" class="control-label col-lg-2"> المستشفى </label>
          <div class="col-lg-5">
            <select class="form-control"  name="hospital_id">
                @foreach($hospitals as $staffa)
                <option  value="{{$staffa->id}}">{{$staffa->dis}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="control-label col-lg-2"> <b>الاسم</b> </label>
          <div class="col-lg-5">
            <select class="form-control" multiple name="doctor_id[]">
                @foreach($doctors_ as $pharmacy)
                <option  value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
                @endforeach
            </select>
          </div>
        </div>
            
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-success" type="submit">تأكيد</button>
                <button class="btn btn-danger"  type="reset">حذف</button>
              </div>
            </div>
        </form>
      </div>
    </div>


    {{-- <div class="form-panel">
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('hospital.addDoctors')}}">
         @csrf
        <div class="form-group">
          <label for="name" class="control-label col-lg-2"> <b>الاسم</b> </label>
          <div class="col-lg-5">
            <select class="form-control" name="hospital_id">
                @foreach($hospitalsas $pharmacy)
                <option  value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
                @endforeach
            </select>
          </div>
        </div>
            <div class="form-group">
              <label for="name" class="control-label col-lg-2"> المستشفى </label>
              <div class="col-lg-5">
                <select class="form-control" multiple name="doctor_id[]">
                    @foreach($doctors_ as $staffa)
                    <option  value="{{$staffa->id}}">{{$staffa->dis}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-success" type="submit">تأكيد</button>
                <button class="btn btn-danger"  type="reset">حذف</button>
              </div>
            </div>
        </form>
      </div>
    </div> --}}


</section>
@endsection
<head>
    <title>
       الاطباء
    </title>

</head>

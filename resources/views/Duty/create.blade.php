@extends('include.master')
@section('content')


<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
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
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('duty.save')}}">
                               @csrf
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">الطبيب</label>
                                    <div class="col-lg-10">
                                      <select class="form-control" name="doctor_id">
                                        <option  selected required value=""></option>
                                          @foreach($doctors as $doctor)
                                          <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">اليوم </label>
                                    <div class="col-lg-10">
                                      <select class="form-control" name="day_id">
                                        <option  selected required value=""></option>
                                          @foreach($days as $day)
                                          <option value="{{$day->id}}">{{$day->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                                        <button type="reset" class="btn btn-relief-danger mr-1 mb-1">إعاده</button>
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
       إضافة | موعد
    </title>

</head>

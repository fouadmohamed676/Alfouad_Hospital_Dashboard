@extends('include.master')
@section('content')


  <!--main content start-->


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
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('pation/save_update/'.$pation->id)}}">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                                @csrf
                               @method('put')
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">الاسم</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$pation->name}}" name="name" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">E-mail</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$pation->email}}" name="email" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">الهاتف</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" maxlength="10" minlength="10" required value="{{$pation->phone}}" name="phone" type="number" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">المرض</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$pation->sick}}" name="sick" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="hospital_id" class="control-label col-lg-2">المستشفى</label>
                                    <div class="col-lg-10">
                                      <select class="form-control"  name="hospital_id" id="select" required="">
                                          @foreach($hospitals as $hospital)
                                          <option value="{{$hospital->id}}" {{$hospital->hospital_id ? 'selected' : ''}}>
                                              {{$hospital->dis}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">الجنسية</label>
                                    <div class="col-lg-10">
                                      <select class="form-control"  name="nationality_id" id="select" required="">
                                          @foreach($nationals as $nationality)
                                          <option value="{{$nationality->id}}" {{$nationality->nationality_id ? 'selected' : ''}}>
                                              {{$nationality->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">الطبيب</label>
                                    <div class="col-lg-10">
                                      <select class="form-control"  name="doctor_id" id="select" required="">
                                          @foreach($doctors as $doctor)
                                          <option value="{{$doctor->id}}" {{$doctor->doctor_id ? 'selected' : ''}}>
                                              {{$doctor->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">المحلية</label>
                                    <div class="col-lg-10">
                                      <select class="form-control"  name="local_id" id="select" required="">
                                          @foreach($locals as $local)
                                          <option value="{{$local->id}}" {{$local->local_id ? 'selected' : ''}}>
                                              {{$local->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                                    <button  type="reset" class="btn btn-relief-danger  mr-1 mb-1">إلغاء</button>
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
         تعديل | بيانات
     </title>
</head>

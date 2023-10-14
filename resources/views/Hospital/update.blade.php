@extends('include.master')
@section('content')
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> تعديل بيانات الطبيب </h3>

      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('hospital/save_update/'.$hospital->id)}}">
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                @csrf
               @method('put')
                <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-2"><b><h4>الاسم</h4></b></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="firstname" required value="{{$hospital->dis}}" name="dis" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-2"><b><h4>الهاتف</h4></b></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="firstname" required value="{{$hospital->phone}}" name="phone" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="lastname" class="control-label col-lg-2"><b><h4>العنوان</h4></b></label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="lastname" required value="{{$hospital->address}}"  name="title" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                    <label for="specialization_id" class="control-label col-lg-2"><b> <h4>التخصص</h4></b></label>
                    <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->specialization_id}}"  name="specialization_id">
                          @foreach($hospitals as $specialization)
                              <option value="{{$specialization->id }}" {{$specialization->name ? "Selected":""}}>
                              {{$specialization->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                <div class="form-group ">
                    <label for="local_id" class="control-label col-lg-2"> <b> <h4>المحلية</h4></b></label>
                    <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->local_id}}"  name="local_id">
                          @foreach($locals as $specialization)
                              <option value="{{$specialization->id }}" {{$specialization->name ? "Selected":""}}>
                              {{$specialization->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="specialization_id" class="control-label col-lg-2"><b> <h4>الحاله</h4></b></label>
                    <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->status}}"  name="status">
                        <option value="1" style="background-color: green">تعمل</option>
                        <option value="0" style="background-color: red" style="font-style: normal" style="font-family: 'Courier New', Courier, monospace" selected='selected'>لاتعمل</option>
                      </select>
                    </div>
                  </div>
               
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                    <button type="reset" class="btn btn-outline-danger  mr-1 mb-1">إلغاء</button>
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
        {{$hospital->name}} تعديل بيانات
     </title>
</head>

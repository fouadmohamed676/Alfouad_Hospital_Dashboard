@extends('include.master')
@section('content')


  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <h3>  إضافة تحويل | مريض <i class="fa fa-angle-double-down"> </i> </h3>

      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('forword.save')}}">
               @csrf
               <div class="form-group ">
                <label for="firstname" class="control-label col-lg-2"> <h4>  رقم الملف  </h4> </label>
                <div class="col-lg-5">
                  <input class="  form-control" novalidate  required id="firstname" size="18px" aria-hidden="true" name="file_number" type="number" />
                </div>
              </div>
              <div class="form-group ">
                <label for="name" class="control-label col-lg-2">الطبيب</label>
                <div class="col-lg-5">
                  <select class="form-control" name="doctor_id">
                    <option  selected required value=""></option>
                      @foreach($doctors as $doctor)
                      <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group ">
                <label for="name" class="control-label col-lg-2">المريض</label>
                <div class="col-lg-5">
                  <select class="form-control" name="pation_id">
                    <option  selected required value=""></option>
                      @foreach($pations as $pation)
                      <option value="{{$pation->id}}">{{$pation->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group ">
                <label for="name" class="control-label col-lg-2">القسم المحول منه</label>
                <div class="col-lg-5">
                  <select class="form-control" name="Splize_hos_from">
                    <option  selected required value=""></option>
                      @foreach($Splize_hos_from as $pation)
                      <option value="{{$pation->id}}">{{$pation->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group ">
                <label for="name" class="control-label col-lg-2">القسم المحول له</label>
                <div class="col-lg-5">
                  <select class="form-control" name="Splize_hos_to">
                    <option  selected required value=""></option>
                      @foreach($Splize_hos_to as $pation)
                      <option value="{{$pation->id}}">{{$pation->name}}</option>
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
          <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
      </div>
      <!-- /row -->
    </section>
    <!-- /wrapper -->
  </section>
@endsection
<head>
    <title>
        إضافة تحويل | مريض
    </title>

</head>

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
                            <h3>  إضافة  | مريض <i class="fa fa-angle-double-down"> </i> </h3>

                            <i class="fa fa-angle-double-down"></i>
                        </div>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <div class="form-panel">
                            <div class="form">
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('pation.save')}}">
                               @csrf
                               <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">  الاسم </label>
                                <div class="col-lg-8">
                                  <input class="  form-control" novalidate  required id="firstname" size="18px" aria-hidden="true" name="name" type="text" />
                                </div>
                              </div>
                               <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">  الهاتف </label>
                                <div class="col-lg-8">
                                  <input class="  form-control" novalidate minlength="10" maxlength="10" required id="firstname" size="18px" aria-hidden="true" name="phone" type="number" />
                                </div>
                              </div>
                               <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">  E-mail </label>
                                <div class="col-lg-8">
                                  <input class="  form-control" novalidate  required id="firstname" size="18px" aria-hidden="true" name="email" type="email" />
                                </div>
                              </div>
                               <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">  المرض </label>
                                <div class="col-lg-8">
                                  <input class="  form-control" novalidate  required id="firstname" size="18px" aria-hidden="true" name="sick" type="text" />
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">الطبيب</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="doctor_id">
                                    <option  selected required value=""></option>
                                      @foreach($doctors as $doctor)
                                      <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">المستشفى</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="hospital_id">
                                    <option  selected required value=""></option>
                                      @foreach($hospitals as $doctor)
                                      <option value="{{$doctor->id}}">{{$doctor->dis}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="name" class="control-label col-lg-2">المحلية</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="local_id">
                                    <option  selected required value=""></option>
                                      @foreach($locals as $local)
                                      <option value="{{$local->id}}">{{$local->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="name" class="control-label col-lg-2"> الجنسية</label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="nationality_id">
                                    <option  selected required value=""></option>
                                      @foreach($nationals as $national)
                                      <option value="{{$national->id}}">{{$national->name}}</option>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

















  <section id="main-content">
    <section class="wrapper">



      <div class="row mt">
        <div class="col-lg-12">

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
        إضافة | مريض
    </title>

</head>

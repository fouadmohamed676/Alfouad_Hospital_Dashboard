@extends('include.master')
@section('content')


  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row mt">
        <div class="col-lg-12">
            <h4>إضافة موظف<i class="fa fa-angle-double-down"></i></h4>
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('staff.save')}}">
               @csrf
                <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-2">الاسم</label>
                  <div class="col-lg-10">
                    <input class="  form-control" required id="firstname" name="name" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="lastname" class="control-label col-lg-2">العنوان</label>
                  <div class="col-lg-10">
                    <input class=" form-control" required placeholder="العنوان" id="lastname" name="title" type="text" />
                  </div>
                </div>


                <div class="form-group ">
                  <label for="name" class="control-label col-lg-2">الصيدليه </label>
                  <div class="col-lg-10">
                    <select class="form-control" required name="pharamcy_id">
                        <option selected value=""></option>
                        @foreach($pharmacys as $pharmacy)

                        <option value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="email" class="control-label col-lg-2">الايميل</label>
                  <div class="col-lg-10">
                    <input class="form-control" required data-msg="Please enter a valid email" id="email" name="email" type="email" />
                    <div class="validate"></div>
                </div>
                </div>


                <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">الهاتف</label>
                    <div class="col-lg-10">
                        {{-- <x-form.input type="tel" id="phone" name="phone" /> --}}
                      <input class="form-control " id="phone" required aria-valuetext="number"  name="phone" type="number" />
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success mr-1 mb-1">تأكيد</button>
                        <button type="reset" class="btn btn-outline-danger mr-1 mb-1">إلغاء</button>
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
       إضافة موظف
    </title>

</head>

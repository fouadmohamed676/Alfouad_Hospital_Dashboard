@extends('include.master')
@section('content')


  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <h3>  إضافة صيدلية <i class="fa fa-angle-double-down"> </i> </h3>

      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('pharmacy.save')}}">
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
                  <input class="form-control" required id="lastname" name="title" type="text" />
                </div>

              <div class="form-group ">
                <label for="lastname" class="control-label col-lg-2">مواعيد العمل</label>
                <div class="col-lg-10">
                  <input class="form-control" required id="lastname" name="time_work" type="text" />
                </div>
              </div>
                </div>

                <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">الهاتف</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="phone" required aria-valuetext="number"  name="phone" type="number" />
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
        إضافة صيدلية
    </title>

</head>

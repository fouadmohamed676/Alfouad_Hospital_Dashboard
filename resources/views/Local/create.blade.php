@extends('include.master')
@section('content')


  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <h3>  إضافة محلية <i class="fa fa-angle-double-down"> </i> </h3>

      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('local.save')}}">
               @csrf
               <div class="form-group ">
                <label for="firstname" class="control-label col-lg-2"> <h4>  الاسم  </h4> </label>
                <div class="col-lg-5">
                  <input class="  form-control" required id="firstname" size="18px" aria-hidden="true" name="name" type="text" />
                </div>
              </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-success" type="submit">تأكيد</button>
                    <button class="btn btn-danger" type="reset">حذف</button>
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
        إضافة محلية
    </title>

</head>

@extends('include.master')
@section('content')




  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">

      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <div class="form">
              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('doctors.save')}}">
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
                </div>

                <div class="form-group ">
                  <label for="username" class="control-label col-lg-2">التخصص</label>
                  <div class="col-lg-10">
                    <select required class="form-control" name="specialization_id">
                        <option value="" required selected></option>
                        @foreach($specializations as $specialization)
                         <option  value={{$specialization->id}}><h2>{{$specialization->name}}</h2></option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="name" requierd class="control-label col-lg-2">الجنس</label>
                  <div class="col-lg-10">
                    <select class="form-control"required name="gender_id">
                        <option value="" selected requierd></option>
                        @foreach($genders as $gender)

                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="name" class="control-label col-lg-2">المستشفى</label>
                  <div class="col-lg-10">
                    <select class="form-control" required name="hospital_id">
                        <option selected value=""></option>
                        @foreach($hospital as $hosp)
                        <option value="{{$hosp->id}}">{{$hosp->dis}}</option>
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
                    <label for="name" class="control-label col-lg-2">الجنسية </label>
                    <div class="col-lg-10">
                      <select class="form-control" name="nationality_id">
                        <option  selected required value=""></option>
                          @foreach($nationalitys as $nationality)
                          <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">العياده</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="clinic_id">
                        <option  selected required value=""></option>
                          @foreach($clincks as $clinck)
                          <option value="{{$clinck->id}}">{{$clinck->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>


                <div class="form-group">
                    <div class="col-lg-10">
                    <label for="numbers" class="control-label col-lg-2">الهاتف</label>
                        <input type="number" id="numbers" class="form-control" name="phone" placeholder="0123456789">
                        </div>
                  </div>
                <div class="form-group">
                    <div class="col-lg-10">
                    <label for="barth_date" class="control-label col-lg-2">تاريخ الميلاد </label>
                        <input type="date" id="numbers" class="form-control pickadate" name="barth_date">
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
       إضافة طبيب
    </title>

</head>

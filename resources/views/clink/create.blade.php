@extends('include.master')
@section('content')



<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <div class="black">

                            إضافة | عيادة
                            <i class="fa fa-angle-double-down"></i>
                        </div>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <div class="form-panel">
                            <div class="form">
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('clink.save')}}">
                               @csrf
                               <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2"> <h5>  الاسم  </h5> </label>
                                <div class="col-lg-8">
                                  <input class="  form-control" required id="firstname" size="18px" aria-hidden="true" name="name" type="text" />
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">الهاتف</label>
                                <div class="col-8">
                                  <input class=" form-control" id="firstname" name="phone" type="text" />
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="name" class="control-label col-lg-2"> <h5>المحلية</h5>  </label>
                                <div class="col-lg-8">
                                  <select class="form-control" name="local_id">
                                    <option  selected required value="" class="black"></option>
                                      @foreach($locals as $local)
                                      <option  class="black" value="{{$local->id}}">{{$local->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                                    <button type="reset" class="btn btn-relief-danger mr-1 mb-1">إعاده</button></div>
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
        إضافة عيادة
    </title>

</head>

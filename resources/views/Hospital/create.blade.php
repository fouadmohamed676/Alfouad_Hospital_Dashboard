@extends('include.master')
@section('content')

  <section id="floating-label-layouts">

    <div class="row match-height">
        <div class="col-md-8 col-12">


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                         إضافة مستشفى <i class="fa fa-angle-double-down"></i></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('hospital.save')}}">
                            @csrf
                            <div class="form-group ">
                              <label for="firstname" class="control-label col-lg-2">الاسم</label>
                              <div class="col-12">
                                <input class=" form-control" id="firstname" name="dis" type="text" />
                              </div>
                            </div>
                            <div class="form-group ">
                              <label for="firstname" class="control-label col-lg-2">الهاتف</label>
                              <div class="col-12">
                                <input class=" form-control" id="firstname" name="phone" type="text" />
                              </div>
                            </div>
                            <div class="form-group ">
                              <label for="lastname" class="control-label col-lg-2">العنوان</label>
                              <div class="col-12">
                                <input class=" form-control" id="lastname" name="address" type="text" />
                              </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">التخصص </label>
                                <div class="col-12">
                                  <select class="form-control" name="specialization_id">
                                    <option  selected required value=""></option>
                                      @foreach($specializations as $specialization)
                                      <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">المحلية </label>
                                <div class="col-12">
                                  <select class="form-control" name="local_id">
                                    <option  selected required value=""></option>
                                      @foreach($locals as $local)
                                      <option value="{{$local->id}}">{{$local->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                            <div class="form-group">
                                <div class="col-12">
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
</section>
@endsection
<title>
    إضافة مستشفى
</title>

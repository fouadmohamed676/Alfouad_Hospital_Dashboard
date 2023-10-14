
@extends('include.master')
@section('content')

  <section id="floating-label-layouts">

    <div class="row match-height">
        <div class="col-md-8 col-12">


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        تعديل | بيانات   <i class="fa fa-angle-double-down"></i></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('time/save_update/'.$time->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group ">


                              <label for="firstname" class="control-label col-lg-2"> <div class="black"> الاسم </div></label>
                              <div class="col-12">
                                <input class=" form-control" required value="{{$time->name}}" id="firstname" name="name" type="text" />
                              </div>
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

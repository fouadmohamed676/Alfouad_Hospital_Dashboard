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
                            تعديل | بيانات
                            <i class="fa fa-angle-double-down"></i>
                        </div>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        <div class="form-panel">
                            <div class="form">
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('local/save_update/'.$local->id)}}">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                                @csrf
                               @method('put')
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">الاسم</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$local->name}}" name="name" type="text" />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                                    <button  type="reset" class="btn btn-relief-danger  mr-1 mb-1">إلغاء</button>
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
@endsection
<head>
    <title>
         تعديل | بيانات {{$local->name}}
     </title>
</head>

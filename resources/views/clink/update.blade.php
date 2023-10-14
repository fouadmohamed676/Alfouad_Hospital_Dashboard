@extends('include.master')
@section('content')
<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        تعديل | بيانات
                        <i class="fa fa-angle-double-down"></i>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('clink/save_update/'.$clink->id)}}">
                            @csrf
                           @method('put')
                            <div class="form-group ">
                              <label for="firstname" class="control-label col-lg-2">الاسم</label>
                             <br>
                              <div class="col-lg-10">
                                <input class=" form-control" id="firstname" required value="{{$clink->name}}" name="name" type="text" />
                              </div>
                            </div>
                            <div class="form-group ">
                              <label for="firstname" class="control-label col-lg-2">الهاتف</label>
                             <br>
                              <div class="col-lg-10">
                                <input class=" form-control" id="firstname" required value="{{$clink->phone}}" name="phone" type="number" />
                              </div>
                            </div>
                            <div class="form-group ">
                                <label for="local_id" class="control-label col-lg-2">الجنسية </label>
                                <div class="col-lg-10">
                                  <select class="form-control" name="local_id">
                                      @foreach($locals as $local)
                                      <option value="{{$local->id}}" {{($local->id === $local->local_id) ? 'Selected' : ''}}>{{$local->name}}</option>
                                    
                                      {{-- <option value="{{$local->id}}"{{$local->id == $local->local_id  ?  "selected" : ""}}> --}}
                                        {{-- {{$local->name}} --}}
                                      {{-- </option> --}}
                                      @endforeach
                                  </select>
                                </div>
                              </div>
                            <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
                                <button type="reset"  class="btn btn-relief-danger  mr-1 mb-1">إلغاء</button>
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
<head>
    <title>
            تعديل | بيانات
     </title>
</head>

@extends('include.master')
@section('content')

<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
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
                              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('doctors/save_update/'.$doctors->id)}}">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                                @csrf
                               @method('put')
                                <div class="form-group ">
                                  <label for="firstname" class="control-label col-lg-2">الاسم</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" required value="{{$doctors->name}}" name="name" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-2">الايميل</label>
                                    <div class="col-lg-10">
                                      <input class="form-control " id="email" value="{{$doctors->email}}" name="email" type="email" />
                                    </div>
                                  </div>
                                <div class="form-group ">
                                  <label for="lastname" class="control-label col-lg-2">العنوان</label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" id="lastname" required value="{{$doctors->title}}"  name="title" type="text" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                    <label for="phone" class="control-label col-lg-2">الهاتف</label>
                                    <div class="col-lg-10">
                                      <input class="form-control" value="{{$doctors->phone}}" required id="phone" name="phone" type="number" />
                                    </div>
                                  </div>
                                <div class="form-group ">
                                  <label for="specialization_id" class="control-label col-lg-2">التخصص</label>
                                  <div class="col-lg-10">
                                    <select class="form-control"  value="{{$doctors->specialization_id}}"  name="specialization_id">
                                        @foreach($specializations as $specialization)
                                            <option value="{{$specialization->id }}" {{$specialization->name ? "Selected":""}}>
                                            {{$specialization->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="gender_id" class="control-label col-lg-2">الجنس</label>
                                  <div class="col-lg-10">
                                    <select class="form-control" required value="{{$doctors->gender_id}}"  name="gender_id">
                                        {{-- <option value="" selected disabled>Select Gender</option> --}}
                                        @foreach($genders as $gender)
                                        <option value="{{$gender->id }}" {{$gender->gender_id ? "selected":" "}}>
                                            {{$gender->name}}
                                        @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="hospital_id" class="control-label col-lg-2">المستشفى</label>
                                  <div class="col-lg-10">

                                    <select class="form-control"  name="hospital_id" id="select" required="">
                                        @foreach($hospital as $hospitals)
                                        <option value="{{$hospitals->id}}" {{$hospitals->hospital_id ? 'selected' : ''}}>
                                            {{$hospitals->dis}}</option>
                                        @endforeach
                                    </select>


                                  </div>
                                </div>

                                <div class="form-group ">
                                    <label for="nationality_id" class="control-label col-lg-2">الجنسية </label>
                                    <div class="col-lg-10">
                                      <select class="form-control" name="nationality_id">
                                          @foreach($nation as $nationality)
                                          <option value="{{$nationality->id}}"{{$nationality->id == $nationality->nationality_id  ?  "selected" : ""}}>
                                            {{$nationality->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                  </div>


                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success mr-1 mb-1">تأكيد</button>
                                    <button class="btn btn-danger  mr-1 mb-1" type="button">إلغاء</button>
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
        تعديل | بيانات
     </title>
</head>

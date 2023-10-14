@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header">
    <div class="table-responsive">
        <div class="col-lg-3">
            <div class="alert alert-dismissible" role="alert">
                <h4 class="alert-dismissible">العدد الكلي</h4>
                <p class="mb-0">
                    {{ $count }}
                </p>
            </div>
          </div>
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th>الرقم </th>
                    <th>الاسم</th>
                    <th>العنوان</th>
                    <th>الهاتف</th>
                    <th>المحلية</th>
                    <th>التخصص</th>
                    <th>الخيارات</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($hospital as $hospitals)
                <tr class="gradeA">
                    <td>{{$hospitals->id}}</td>
                  <td><strong>{{$hospitals->dis}}</strong></td>
                  <td class="black">{{$hospitals->address}}</td>
                  <td>{{$hospitals->phone}}</td>
                  <td>{{$hospitals->localHospital->name}}</td>
                  <td>

                            <div class="black"><h6><b>{{$hospitals->hospitals->name}}</b></h6></div>

                </td>
                  <td>
                    <a href="{{'/hospital/update/'.$hospitals->id}}" class=" btn bg-gradient-primary" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/hospital/doctors/'.$hospitals->id}}" class=" btn bg-gradient-success" data-toggle="tooltip" data-placement="top" title="الموظفين"><i class="fa fa-user"></i></a>
                    <a href="{{'/hospital/delete/'.$hospitals->id}}" class=" btn bg-gradient-danger" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    <!-- DataTable ends -->
    <!-- add new sidebar starts -->
    <div class="add-new-data-sidebar">
        <div class="overlay-bg"></div>
        <div class="add-new-data">
            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">إضافة مستشفي</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('hospital.save')}}">
            @csrf
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">

                        <div class="col-sm-12 data-field-col">
                            <label for="data-name">الاسم</label>
                            <input type="text" class="form-control" name="dis" id="data-name">
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-name">العنوان</label>
                            <input type="text" class="form-control" name="address" id="data-name">
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-category"> التخصص </label>
                            <select class="form-control" id="data-category" name="specialization_id">
                                <option  selected required value=""></option>
                                @foreach($specializations as $specialization)
                                <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-category"> المحلية </label>
                            <select class="form-control" id="data-category" name="local_id">
                                <option  selected required value=""></option>
                                @foreach($locals as $specialization)
                                <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button type="submit" class="btn btn-relief-success">تأكيد</button>
                </div>
                <div class="cancel-data-btn">
                    <button type="reset" class="btn btn-relief-danger">إلغاء</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- add new sidebar ends -->
</section>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@endsection
<head>
    <title>
        المستشفيات
     </title>
</head>

@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الرقم</th>
                  <th class="hidden-phone">الاسم</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($times as $index=>$time)
                <tr class="gradeA">
                  <td></td>
                  <td class="hidden-phone">{{$time->id}}</td>
                  <td>
                    <div class="chip chip-">
                        <div class="chip-body">
                            <div class="chip-text"><h6><b>{{$time->name}}</b></h6></div>
                        </div>
                    </div>


                  </td>

                  <td>
                    <a href="{{'/time/update/'.$time->id}}" class=" btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/time/delete/'.$time->id}}" class="btn btn-outline-dark btn-outline-danger" data-dismiss="modal" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>

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
                    <h4 class="text-uppercase">إضافة </h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('time.save')}}">
            @csrf
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">

                        <div class="col-sm-12 data-field-col">
                            <label for="data-name">الاسم</label>
                            <input type="text" class="form-control" name="name" id="data-name">
                        </div>

                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-success">تأكيد</button>
                </div>
                <div class="cancel-data-btn">
                    <button class="btn btn-outline-danger">إلغاء</button>
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
       ايام الاسبوع
    </title>

</head>

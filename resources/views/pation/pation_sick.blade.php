@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الرقم</th>
                  <th class="black">الاسم</th>
                  <th class="black">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($sicks as $index=>$sick)
                <tr class="gradeA">
                  <td></td>
                  <td class="black">{{$index+1}}</td>
                  <td>
                            <div class="black"><h6><b>{{$sick->name}}</b></h6></div>
                  </td>

                  <td>
                    <a href="{{'/sick/update/'.$sick->id}}" class=" btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/sick/delete/'.$sick->id}}" class="btn btn-outline-dark btn-outline-danger" data-dismiss="modal" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>

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
                    <h4 class="text-uppercase">إضافة مرض</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('sick.save')}}">
            @csrf
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">

                        <div class="col-sm-12 data-field-col">
                            <label for="black">الاسم</label>
                            <input type="text" class="form-control" name="name" id="data-name">
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
</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@endsection
<head>
    <title>
       الامراض
    </title>

</head>

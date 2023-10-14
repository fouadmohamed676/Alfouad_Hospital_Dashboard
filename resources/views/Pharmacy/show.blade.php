@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الاسم</th>
                  <th class="hidden-phone">العنوان</th>
                  <th class="hidden-phone">مواعيد العمل</th>
                  <th class="hidden-phone">الهاتف</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($pharamcys as $index=>$pharamcy)
                <tr class="gradeA">
                  <td></td>
                  <td><b>{{$pharamcy->name}}</b></td>
                  <td class="hidden-phone">{{$pharamcy->title}}</td>
                  <td class="center hidden-phone">{{$pharamcy->time_work}}</td>
                  <td class="hidden-phone">{{$pharamcy->phone}}</td>
                  <td>
                    <a href="{{'/pharmacy/staff_pharmacy/'.$pharamcy->id}}" class=" btn btn-success btn-dark" data-toggle="tooltip" data-placement="top" title="الموظفين"><i class=" fa fa-user-circle"></i> </a>
                    <a href="{{'/pharmacy/update/'.$pharamcy->id}}" class="btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/pharmacy/delete/'.$pharamcy->id}}" class="btn btn-danger btn-dark" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
                   </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
</section>
@endsection
<head>
    <title>
       الصيدليات
    </title>

</head>

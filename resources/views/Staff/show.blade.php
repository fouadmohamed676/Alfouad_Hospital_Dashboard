@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th>الرقم </th>
                    <th>الاسم</th>
                    <th>العنوان</th>
                    <th>المركبه</th>
                    <th>الهاتف</th>
                    <th> الايميل</th>
                    <th>الخيارات</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($data as $index=>$staff)
                <tr class="gradeA">
                  <td>{{$index+1}}</td>
                  <td><h5>{{$staff->name}}</h5></td>
                  <td><h5>{{$staff->title}}</td>
                  <td><h5>{{$staff->ampolnce->number}}</td>
                  <td><h5>
                    {{$staff->phone}}
                  </td>
                  <td><h5>
                    {{$staff->email}}</h5>
                </td>
                  <td><h5>
                     <a href="{{'/staff/update/'.$staff->id}}" class=" btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/staff/car/'.$staff->id}}" class="  btn btn-success btn-accent-2 " data-toggle="tooltip" data-placement="top" title="المركبه"><i class="fa fa-car"></i></a>
                    <a href="{{'/staff/delete/'.$staff->id}}" class=" btn btn-danger btn-light" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
                  </td></h5>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    <!-- DataTable ends -->
    <!-- add new sidebar starts -->

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
        الموظفين
     </title>
</head>

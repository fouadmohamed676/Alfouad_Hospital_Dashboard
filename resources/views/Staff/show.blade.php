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
                  <td><h5>
                    {{$staff->phone}}
                  </td>
                  <td><h5>
                    {{$staff->email}}</h5>
                </td>
                  <td><h5>
                    <a href="{{'/staff/update/'.$staff->id}}" class=" btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/staff/pharmaces/'.$staff->id}}" class=" btn btn-success btn-dark" data-toggle="tooltip" data-placement="top" title="الصيدليات"><i class="fa fa-bookmark"></i></a>
                    <a href="{{'/staff/delete/'.$staff->id}}" class=" btn btn-danger btn-light" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash-o "></i></a>
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

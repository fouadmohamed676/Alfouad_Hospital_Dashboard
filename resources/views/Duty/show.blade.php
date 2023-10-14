@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th> </th>
                  <th class="hidden-phone">الطبيب</th>
                  <th class="hidden-phone">التحصص</th>
                  <th class="hidden-phone">اليوم</th>
                  <th class="hidden-phone">التاريخ</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>

                @foreach ($duty as $index=>$duty)

                <tr class="gradeA">
                  <td></td>
                    <td>
                    <div class="black"><h6><b>{{$duty->doctor->name}}</b></h6></div>
                  </td>
                  <td>
                    <div class="black"><h6><b>{{$duty->doctor->specilization->name}}</b></h6></div>
                    </td>
                  <td>
                            <div class="black"><h6><b>{{$duty->day->name}}</b></h6></div>
                  </td>

                  <td>
                    <div class="black"><h6><b>{{$duty->created_at}}</b></h6></div>
                 </td>
                 <td>
                    <a href="{{'/duty/update/'.$duty->id}}" class="btn btn-outline-info" data-dismiss="modal" data-placement="top" title="تعديل"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="{{'/duty/delete/'.$duty->id}}" class="btn btn-outline-danger" data-dismiss="modal" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>

                 </td>

                </tr>
                @endforeach
              </tbody>
        </table>

    </div>
    <!-- DataTable ends -->
</section>
<!-- END: Content-->

@endsection
<head>
    <title>
       المواعيد | اليوم
    </title>

</head>

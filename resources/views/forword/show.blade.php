@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">رقم الملف</th>
                  <th class="hidden-phone">المريض</th>
                  <th class="hidden-phone">القسم المحول منه</th>
                  <th class="hidden-phone">القسم المحول له</th>
                  <th class="hidden-phone">الطبيب</th>
                  <th class="hidden-phone">التاريخ</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($forwords as $index=>$forword)
                <tr class="gradeA">
                  <td></td>
                  {{-- <td class="hidden-phone">{{$forword->id}}</td> --}}

                  <td>
                            <div class="black"><h6><b>{{$forword->file_number}}</b></h6></div>
                  </td>
                  <td>
                    <div class="black"><h6><b>{{$forword->pation->name}}</b></h6></div>
                    </td>

                  <td>
                    <div class="black"><h6><b>{{$forword->forword_from->name}}</b></h6></div>
                    </td>
                  <td>
                            <div class="black"><h6><b>{{$forword->forword_to->name}}</b></h6></div>
                  </td>
                  <td>
                    <div class="black"><h6><b>{{$forword->doctor->name}}</b></h6></div>
                    </td>

                  <td>
                    <div class="black"><h6><b>{{$forword->created_at}}</b></h6></div>
                 </td>
                 <td>
                    <a href="{{'/forword/update/'.$forword->id}}" class="btn btn-outline-info" data-dismiss="modal" data-placement="top" title="تعديل"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="{{'/forword/delete/'.$forword->id}}" class="btn btn-outline-danger" data-dismiss="modal" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>

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
    تحويلات | المرضى
    </title>

</head>

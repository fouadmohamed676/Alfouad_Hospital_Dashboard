@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الاسم</th>
                  <th class="hidden-phone">الهاتف</th>
                  <th class="hidden-phone">المرض</th>
                  <th class="hidden-phone">المستشفى</th>
                  <th class="hidden-phone">الطبيب</th>
                  <th class="hidden-phone">الجنسية</th>
                  <th class="hidden-phone">المحلية</th>
                  <th class="hidden-phone">التاريخ</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($pations as $index=>$pation)
                <tr class="gradeA">
                  <td></td>
                  <td>
                  <div class="black"><h6><b>{{$pation->name}}</b></h6></div>
                  </td>
                  <td>
                  <div class="black"><h6><b>{{$pation->phone}}</b></h6></div>
                  </td>
                  <td>
                    <div class="black"><h6><b>{{$pation->sick}}</b></h6></div>
                    </td>

                  <td>
                    <div class="black"><h6><b>{{$pation->hospital_pation->dis}}</b></h6></div>
                    </td>
                    <td>
                        <div class="black"><h6><b>{{$pation->doctor->name}}</b></h6></div>
                      </td>
                      <td>
                        <div class="black"><h6><b>{{$pation->nationalit->name}}</b></h6></div>
                       </td>

                       <td>
                         <div class="black"><h6><b>{{$pation->local->name}}</b></h6></div>
                         </td>
                  <td>
                    <div class="black"><h6><b>{{$pation->created_at}}</b></h6></div>
                 </td>
                 <td>
                    <a href="{{'/pation/update/'.$pation->id}}" class="btn btn-outline-info" data-dismiss="modal" data-placement="top" title="تعديل"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="{{'/pation/delete/'.$pation->id}}" class="btn btn-outline-danger" data-dismiss="modal" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
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
 المرضى |
    </title>

</head>

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
                </tr>
              </thead>
            <tbody>
                @foreach ($staff as $index=>$pharamcy)
                <tr class="gradeA">
                  <td></td>
                  <td><b>{{$pharamcy->pharmacy->name}}</b></td>
                  <td class="hidden-phone">{{$pharamcy->pharmacy->title}}</td>
                  <td class="center hidden-phone">{{$pharamcy->pharmacy->time_work}}</td>


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

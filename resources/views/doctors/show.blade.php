@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header">
    <div class="col-lg-3">
        <div class="alert alert-dismissible" role="alert">
            <h4 class="alert-dismissible">العدد الكلي</h4>
            <p class="mb-0">
                {{ $count }}
            </p>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th></th>
                    <th class="product-name">الاسم</th>
                    {{-- <th class="product-name">المستشفى</th> --}}
                    <th class="product-name">التخصص</th>
                    <th class="product-name">العيادة</th>
                    <th class="product-name">خيارات</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($doctors) && $doctors->count() >0)

                @endif
                @foreach ($doctors as $index=>$doctor)
                <tr>
                  <td></td>
                  <td>{{$doctor->name}}</td>
                  {{-- <td>
                  {{$doctor->hospital->dis}}
                </td> --}}
                  <td class="product-name">

                    {{$doctor->specilization->name}}
                  </td>
                  <td class="product-name">{{$doctor->clinck->name}}</td>
                  <td>
                    <a href="{{'/doctors/details/'.$doctor->id}}"class="btn bg-gradient-info" data-toggle="tooltip" data-placement="top" title="عرض"><i class="fa fa-user"></i></a>
                    <a href="{{'/doctors/doctor_duty/'.$doctor->id}}" class="btn btn-outline-success" data-dismiss="modal" data-placement="top" title="مواعيد العمل"><i class="fa fa-calendar-check-o"></i></a>
                    <a href="{{'/doctors/update/'.$doctor->id}}" class="btn bg-gradient-success" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/doctors/delete/'.$doctor->id}}" class="btn bg-gradient-danger" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
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
       الاطباء
    </title>

</head>

@extends('include.show_data')
@section('show')
<div class="tab-pane show active" id="buttons-table-preview">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                    <th>No: </th>
                    <th class="product-name">Name</th>
                    <th class="product-name">E-mail</th>
                    <th class="product-name">Gender</th>
                    <th class="product-name">Specialization</th>
                    <th class="product-name">Clink</th>
                    <th class="product-name">Options</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($doctors) && $doctors->count() >0)

                @endif
                @foreach ($doctors as $index=>$doctor)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{$doctor->name}}</td>
                  <td>{{$doctor->email}}</td>
                  <td>{{$doctor->gender->name}}</td>
                    {{-- <td class="product-name">
                        @foreach($doctor->hospital as $hospital)
                        {{$hospital->dis}}
                        @endforeach
                    </td> --}}
                  <td class="product-name">

                    {{$doctor->specialization->name}}
                  </td>
                  <td class="product-name">{{$doctor->clink->name}}</td>
                  <td>
                    <a href="{{'/doctors/details/'.$doctor->id}}"class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="عرض"><i class="mdi mdi-file"></i></a>
                    <a href="{{'/doctors/doctor_duty/'.$doctor->id}}" class="btn btn-outline-yahoo" data-dismiss="modal" data-placement="top" title="مواعيد العمل"><i class="mdi mdi-calendar"></i></a>
                    <a href="{{'/doctors/update/'.$doctor->id}}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="{{'/doctors/delete/'.$doctor->id}}" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="حذف"><i class="mdi mdi-trash-can"></i></a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection

@extends('include.show_data')
@section('show')
<!-- end nav-->
<div class="tab-pane show active" id="buttons-table-preview">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>No:</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Specialization</th>
                <th>Local</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $index=>$hospital)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $hospital->dis }}</td>
                <td>{{ $hospital->address }} </td>
                <td>{{ $hospital->phone }}</td>
                <td>{{ $hospital->Specialization->name }}</td>
                <td>{{ $hospital->local->name }} </td>
                    <td>
                <a href="{{'/hospital/doctors/'.$hospital->id}}" class="btn btn-outline-info"> <i class="mdi mdi-calendar-account" title="ايام العمل"></i></a>
                <a href="{{'/hospital/update/'.$hospital->id}}" class="btn btn-outline-success"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="{{'/hospital/delete/'.$hospital->id}}" class="btn btn-outline-danger"> <i class="mdi mdi-delete"></i></a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

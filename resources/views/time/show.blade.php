@extends('include.show_data')
@section('show')
<div class="tab-pane show active" id="buttons-table-preview">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
                <tr>
                  <th class="hidden-phone">No:</th>
                  <th class="hidden-phone">Name</th>
                  <th class="hidden-phone">Options</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($times as $index=>$time)
                <tr>
                  <td class="hidden-phone">{{$index+1}}</td>
                  <td>
                    <div class="chip chip-">
                        <div class="chip-body">
                            <div class="chip-text"><h6><b>{{$time->name}}</b></h6></div>
                        </div>
                    </div>
                  </td>
                    <td>
                    @if ($time->is_deleted==1)
                    <a href="{{'/time/delete/'.$time->id}}" class="btn btn-outline-danger btn-outline-danger" data-placement="top" title="delete"><i class="mdi mdi-trash-can"></i></a>

                    @else
                    <a href="{{'/time/restore/'.$time->id}}" class="btn btn-outline-success btn-outline-success" data-placement="top" title="active"><i class="mdi mdi-check-all"></i></a>

                    @endif
                    <a href="{{'/time/update/'.$time->id}}" class=" btn btn-outline-info btn-outline-info" data-toggle="tooltip" data-placement="top" title="update"><i class="mdi mdi-square-edit-outline"></i></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    <div class="add-new-data-sidebar">
        <div class="add-new-data">
            <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('time.save')}}">
            @csrf
            <div class="data-items pb-3 col-8">
                <div class="data-fields px-2 mt-3">
                    <div class="row">
                        <div class="col-sm-8 data-field-col">
                            <input type="text" placeholder="new day" class="form-control" name="name" id="data-name">
                        </div>
                    </div>
                </div>
            </div>
                 <div class="add-data-btn m-lg-2">
                    <button class="btn btn-success">تأكيد</button>
                    <button class="btn btn-outline-danger">إلغاء</button>
                </div>
            </form>
        </div>
@endsection


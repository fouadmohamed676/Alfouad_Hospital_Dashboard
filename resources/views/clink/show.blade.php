@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th>الرقم </th>
                  <th class="hidden-phone">الرقم</th>
                  <th class="hidden-phone">الاسم</th>
                  <th class="hidden-phone">الهاتق</th>
                  <th class="hidden-phone">المحلية</th>
                  <th class="hidden-phone">الخيارات</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($clinks as $index=>$clink)
                <tr class="gradeA">
                  <td></td>
                  <td class="hidden-phone">{{$index+1}}</td>
                  <td>
                    <div class="black"><h6><b>{{$clink->name}}</b></h6>

                    </div>
                  </td>
                  <td class="product-name">
                    {{$clink->phone}}
                  </td>
                  <td>
                    {{$clink->local->name}}
                  </td>
                  <td>
                    <a href="{{'/clink/update/'.$clink->id}}" class=" btn btn-primary btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/clink/del_update/'.$clink->id}}" class=" btn btn-danger btn-dark" data-toggle="tooltip" data-placement="top" title="del_"><i class="fa fa-pencil"></i></a>
                    {{-- <a href="{{'/clink/delete/'.$clink->id}}" class=" btn btn-danger btn-dark" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-trash-o"></i></a> --}}

                    {{-- <a href="{{'/clink/delete/'.$clink->id}}" class="btn btn-danager btn-danger" data-dismiss="modal" data-placement="top" title="حذف"> --}}

{{-- <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('clink/del_update/'.$clink->id)}}">
<div class="col-lg-3">
<input class=" form-control" id="firstname"  required  value="{{$clink->status}}" name="status" />
</div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-relief-success mr-1 mb-1">تأكيد</button>
    </div>
  </div>
</form> --}}

                </td>
                </tr>
                @endforeach
              </tbody>
        </table>

    </div>
    <!-- DataTable ends -->
    <!-- add new sidebar starts -->

    <!-- add new sidebar ends -->
</section>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@endsection
<head>
    <h4>
    <title>


            العيادات

    </title>

</h4>
</head>

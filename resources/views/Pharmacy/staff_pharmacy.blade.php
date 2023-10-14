@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                  <th></th>
                  <th>الرقم</th>
                  <th>الاسم</th>
                  <th>الهاتف</th>
                  <th>العنوان</th>
                  <th>E-mail</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($staff as $index=>$pharamcyss)
                <tr class="gradeA">
                  <td class="black"></td>
                  <td class="black">{{$index+1}}</td>
                  <td>{{$pharamcyss->staff->name}}</td>
                  <td>{{$pharamcyss->staff->phone}}</td>
                  <td>{{$pharamcyss->staff->title}}</td>
                  <td>{{$pharamcyss->staff->email}}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>

    <div class="form-panel">
        <div class="form">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('pharmacy.staff_pharm')}}">
           @csrf
          <div class="form-group">
            <label for="name" class="control-label col-lg-2"> الصيدلية </label>
            <div class="col-lg-5">
              <select class="form-control" name="pharmacy_id">
                  @foreach($pharmacys as $pharmacy)
                  <option  value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
                  @endforeach
              </select>
            </div>
          </div>
              <div class="form-group">
                <label for="name" class="control-label col-lg-2"> الموظفين </label>
                <div class="col-lg-5">
                  <select class="form-control" multiple name="staff_id[]">
                      @foreach($staffs as $staffa)
                      <option  value="{{$staffa->id}}">{{$staffa->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-success" type="submit">تأكيد</button>
                  <button class="btn btn-danger"  type="reset">حذف</button>
                </div>
              </div>
          </form>
        </div>
      </div>

</section>
@endsection
<head>
    <title>
        صيدلية | {{$pharmacy->name}}
     </title>
</head>

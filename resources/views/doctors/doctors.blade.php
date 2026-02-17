@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header" id="modal-themes">
    <div class="table-responsive">
        <table class="table table-dark mb-0">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">الرقم</th>
                  <th scope="col">الايام</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($dutys as $index=>$duty_)
                <tr scope="row">
                  <td>{{$index+1}}</td>
                  <td>
                    <b>{{$duty_->duty->name}}</b>
                </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
    <div class="form-panel">
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('doctors.times_doctors')}}">
         @csrf
        <br>
        <br>
        <div class="form-group">
          <label for="name" class="control-label col-lg-2"> <b>الطبيب</b> </label>
          <div class="col-lg-5">
            <select class="form-control" name="doctor_id">
                @foreach($doctors as $doctor)
                <option  value="{{$doctor->id}}">{{$doctor->name}}</option>
                @endforeach
            </select>
          </div>
        </div>
            <div class="form-group">
              <label for="name" class="control-label col-lg-2"> أيام االعمل </label>
              <div class="col-lg-5">
                <select class="form-control" multiple name="time_id[]">
                    @foreach($times as $time)
                    <option  value="{{$time->id}}">{{$time->name}}</option>
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

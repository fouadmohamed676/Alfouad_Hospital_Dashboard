@extends('include.master')
@section('content')
<div class="col-md-6">
    <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('doctors.save')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" required class="form-control" data-toggle="input-mask" name="name">
            <span class="font-13 text-muted"> </span>
        </div>
    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" required class="form-control" data-toggle="input-mask" name="title">
        <span class="font-13 text-muted"> </span>
    </div>

    <div class="mb-3">
        <label class="form-label">Telephone</label>
        <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="0000-0000">
        <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
    </div>
    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" required class="form-control" data-toggle="input-mask" name="email">
        <span class="font-13 text-muted"> </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Specialization</label>
        <select name="specialization_id" class="form-control" data-toggle="select">
        <option>Select</option>
        @foreach($specializations as $specialization)
        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Gender</label>
        <select name="gender_id" class="form-control" data-toggle="select">
        <option>Select</option>
        @foreach($genders as $gender)
        <option value="{{$gender->id}}">{{$gender->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Hospital</label>
        <select name="hospital_id" class="form-control" data-toggle="select">
        <option>Select</option>
        @foreach($hospitals as $hospital)
        <option value="{{$hospital->id}}">{{$hospital->dis}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nationality</label>
        <select name="nationality_id" class="form-control" data-toggle="select">
        <option>Select</option>
        @foreach($nationalities as $nationality)
        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Clinks</label>
        <select name="clinic_id" class="form-control" data-toggle="select">
        <option>Select</option>
        @foreach($clinks as $clink)
        <option value="{{$clink->id}}">{{$clink->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Barth Date</label>
        <input type="date" id="numbers" class="form-control pickadate" name="barth_date">
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-outline-success btn-rounded"><i class="uil-cloud-computing"></i> Submit</button>
        <button type="reset" class="btn btn-outline-danger btn-rounded"><i class="tru"></i> Reset</button></div>
    </div>

    </form>
</div>
@endsection

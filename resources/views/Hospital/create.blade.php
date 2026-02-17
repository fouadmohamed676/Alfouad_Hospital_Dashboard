@extends('include.master')
@section('content')
<div class="col-md-6">
<form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('hospital.save')}}">
         @csrf
        <div class="mb-3">
            <label class="form-label">Telephone</label>
            <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="0000-0000">
            <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" data-toggle="input-mask" name="dis">
            <span class="font-13 text-muted"> </span>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" data-toggle="input-mask" name="address">
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
        <label class="form-label">Local</label>
            <select name="local_id" class="form-control" data-toggle="select">
                <option>Select</option>
                @foreach($locals as $local)
                <option value="{{$local->id}}">{{$local->name}}</option>
                @endforeach
            </select>
    </div>
    <button type="submit" class="btn btn-outline-success btn-rounded"><i class="uil-cloud-computing"></i> Submit</button>
    <button type="reset" class="btn btn-outline-danger btn-rounded"><i class="tru"></i> Reset</button>
    </form>
</div>

@endsection













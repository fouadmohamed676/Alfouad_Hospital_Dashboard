@extends('include.master')
@section('content')

              <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{url('hospital/save_update/'.$hospital->id)}}">
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />url('/product/save_update/'.$data->id) --}}
                @csrf
               @method('put')

               <label class="form-label">Name</label>
                  <div class="col-lg-10">
                    <input class=" form-control" required value="{{$hospital->dis}}" name="dis" type="text" />

                </div>
                <div class="form-group ">
                    <label class="form-label">Phone</label>
                  <div class="col-lg-10">
                    <input class="form-control" required value="{{$hospital->phone}}" name="phone" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label class="form-label">Address</label>
                  <div class="col-lg-10">
                    <input class=" form-control"  required value="{{$hospital->address}}"  name="title" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label class="form-label">Specialization</label>
                    <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->specialization_id}}"  name="specialization_id">
                          @foreach($hospitals as $specialization)
                              <option value="{{$specialization->id }}" {{$specialization->name ? "Selected":""}}>
                              {{$specialization->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <label class="form-label">Local</label>
                    <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->local_id}}"  name="local_id">
                          @foreach($locals as $specialization)
                              <option value="{{$specialization->id }}" {{$specialization->name ? "Selected":""}}>
                              {{$specialization->name}}</option>
                          @endforeach
                      </select>

                  </div>
                    {{-- <label class="form-label">Address</label>
                  <div class="col-lg-10">
                      <select class="form-control"  value="{{$hospital->status}}"  name="status">
                        <option value="1" style="background-color: green">تعمل</option>
                        <option value="0" style="background-color: red" style="font-style: normal" style="font-family: 'Courier New', Courier, monospace" selected='selected'>لاتعمل</option>
                      </select>

                  </div> --}}

                  <div class="col-lg-offset-2 col-lg-10" style="margin-top: 21px">
                   <button type="submit" class="btn btn-outline-success btn-rounded "><i class="uil-cloud-computing"></i> Submit</button>
                    <button type="reset" class="btn btn-outline-danger btn-rounded "><i class="tru"></i> Reset</button>
                    </div>

              </form>
@endsection



@extends('include.master')
@section('content')

    <div class="container-fluid">
            <div class="row">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="javascript:void(0);" class="btn btn-success mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div>
                </div>
                  @yield('show')
            </div>
            <!-- end page title -->
        </div> <!-- container -->
@endsection

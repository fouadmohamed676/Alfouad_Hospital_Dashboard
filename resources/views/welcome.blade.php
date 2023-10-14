@extends('include.master')
@section('content')
<section id="faq-search">
    <div class="row">
        <div class="col-12">
            <div class="card faq-bg white">
                <div class="card-content">
                    <div class="card-body p-sm-4 p-2">
                        <center>
                            <h1 class="black">مرحبا بكم  مستشفي الفؤاد | التخصصي</h1>
                        </center>
                            <form>

                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control form-control-lg" id="searchbar" placeholder="Search">
                                    <div class="form-control-position">
                                    <i class="feather icon-search px-1"></i>
                                    </div>
                                </fieldset>
                            </form>
                    </div>
                </div>
            </div>
         </div>
    </div>
</section>

@endsection

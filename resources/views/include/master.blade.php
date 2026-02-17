@include('include.header')
<div class="content-page">
    <div class="content">
        @include('include.navbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="margin-top: 5ex">
                    <div class="card">
                        <div class="card-body">
                                    @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div> <!-- container -->
    </div> <!-- content -->
 </div>
@include('include.footer')
@include('include.right_sidebar')
@include('include.scribt')
</body>
</html>

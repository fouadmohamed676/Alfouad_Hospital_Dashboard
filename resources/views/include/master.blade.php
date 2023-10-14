@include('include.scribt')
<!-- END: Head-->

<!-- BEGIN: Body-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-body">
            @include('include.messagess')
            @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->

    @include('include.footer')
    <!-- END: Footer-->

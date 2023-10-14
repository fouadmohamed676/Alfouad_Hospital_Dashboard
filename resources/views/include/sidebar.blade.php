<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{('/')}}">
                    <div class="brand-logo"></div>
                    <h3 class="brand-text mb-0"> مستشفى الفؤاد </h3>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"> 
                <ul class="menu-content">
                    <li><a href="{{('/')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">الرئيسية</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-user-md"></i><span class="menu-title" data-i18n="Ecommerce">الاطباء</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('doctors.show')}}"><i class="fa fa-chevron-circle-left"></i><span class="menu-item" data-i18n="Shop">عرض</span></a>
                    </li>
                    <li><a href="{{route('doctors.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">إضافة</span></a>
                    </li>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-heartbeat"></i><span class="menu-title" data-i18n="Ecommerce">العيادات</span><span class="badge badge badge-warning badge-pill float-right mr-2"> 5</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('clink.show')}}"><i class="fa fa-chevron-circle-left"></i><span class="menu-item" data-i18n="Shop">عرض</span></a>
                    </li>
                    <li><a href="{{route('clink.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">إضافة</span></a>
                    </li>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-hospital-o"></i><span class="menu-title" data-i18n="Ecommerce">الصيدليات</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('pharmacy.show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">عرض</span></a>
                    </li>
                    <li><a href="{{route('pharmacy.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">إضافة</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa  fa-hospital-o"></i><span class="menu-title" data-i18n="Data List">المستشفيات </span></a>
                <ul class="menu-content">
                    <li><a href="{{route('hospital.show')}}"><i class="fa fa-google-plus-circle"></i><span class="menu-item" data-i18n="List View">عرض</span></a>
                    </li>
                    <li><a href="{{route('hospital.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة مستشفى </span></a>
                    </li>
                </ul>
            </li>
        
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Data List">الموظفين </span></a>
                <ul class="menu-content">
                    <li><a href="{{route('staff.show')}}"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List View">عرض</span></a>
                    </li>
                    <li><a href="{{route('staff.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة </span></a>
                    </li>
                </ul>
            </li>
           
            <li class=" nav-item"><a href="#"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Data List">المرضى </span></a>
                <ul class="menu-content">
                    {{-- <li><a href="{{route('pation.show')}}"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List View">عرض</span></a> --}}
                    {{-- </li> --}}
                    <li><a href="{{route('pation.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة </span></a>
                    </li>
                </ul>
            </li>
         
            <li class=" nav-item"><a href="#"><i class="fa fa-list-ul"></i><span class="menu-title" data-i18n="Data List">إداره </span><span class="badge badge badge-success badge-pill float-right mr-2">Setting</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('local.show')}}"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List View">المحليات</span></a>
                    </li>
                    <li><a href="{{route('local.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة محلية </span></a>
                    </li>
                </ul>
                
                <ul class="menu-content">
                    <li><a href="{{route('forword.show')}}"><i class="feather icon-list"></i><span class="menu-item" data-i18n="List View"> تحويلات المرضى </span></a>
                    </li>
                    <li><a href="{{route('forword.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة </span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa  fa-heartbeat"></i><span class="menu-title" data-i18n="Data List">الممرضين </span></a>
                <ul class="menu-content">
                    <li><a href="{{route('nurses.show')}}"><i class="fa fa-google-plus-circle"></i><span class="menu-item" data-i18n="List View">عرض</span></a>
                    </li>
                    <li><a href="{{route('nurses.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة ممرض </span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa  fa-gratipay"></i><span class="menu-title" data-i18n="Data List">تحويلات المرضى  </span></a>
                <ul class="menu-content">
                    <li><a href="{{route('forword.show')}}"><i class="fa fa-google-plus-circle"></i><span class="menu-item" data-i18n="List View">عرض</span></a>
                    </li>
                    <li><a href="{{route('forword.create')}}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Thumb View">إضافة </span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

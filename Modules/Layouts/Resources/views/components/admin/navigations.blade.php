<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="{{route('admin.dashboard')}}" class="b-brand">
                <img src="{{ asset('themes/admin/assets/images/logo.png') }}" alt="" class="logo images" width="120">
                <img src="{{ asset('themes/admin/assets/images/favicon.png') }}" alt="" width="32" class="logo-thumb images">
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>{{__('Menus')}}</label>
                </li>                
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">{{__('Dashboard')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
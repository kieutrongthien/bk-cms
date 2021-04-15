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
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                        <span class="pcoded-mtext">{{__('Blog')}}</span>                       
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="#" class="">{{__('Posts')}}</a></li>
                        <li class=""><a href="#" class="">{{__('Categories')}}</a></li>
                        <li class=""><a href="#" class="">{{__('Comments')}}</a></li>
                    </ul>                     
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.index')}}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                        <span class="pcoded-mtext">{{__('Pages')}}</span>                       
                    </a>                 
                </li>                
                <li class="nav-item">
                    <a href="{{route('appearance.index')}}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">{{__('Appearance')}}</span>                       
                    </a>                 
                </li>                
                <li class="nav-item">
                    <a href="{{route('menus.index')}}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">{{__('Menus')}}</span>                       
                    </a>                 
                </li>                
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
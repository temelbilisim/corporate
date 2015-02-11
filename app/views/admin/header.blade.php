<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ URL::route("admin.dashboard") }}">
                <img src="{{ asset('assets/admin/layout/img/logo.png') }}" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide"></div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle hide1" src="../../assets/admin/layout/img/avatar3_small.jpg"/>
					    <span class="username username-hide-on-mobile"> {{ Auth::user()->username }} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> {{ Lang::get("user.settings") }} </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="{{ URL::route("admin.logout") }}">
                                <i class="icon-key"></i> {{ Lang::get("user.logout") }} </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->

<div class="clearfix"></div>
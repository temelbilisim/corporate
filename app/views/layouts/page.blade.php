@extends("layouts.main")

@section("bodyclass") page-header-fixed page-quick-sidebar-over-content @stop

@section("body")
    @include("admin.header")
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include("admin.sidebar")
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            {{ Config::get("owner.copyright") }}
        </div>
        <div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
        </div>
    </div>
    <!-- END FOOTER -->
@stop
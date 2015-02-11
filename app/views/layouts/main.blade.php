<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="@yield('description')" name="description"/>
    <meta content="Eray Aydın" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    {{ HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
    {{ HTML::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/global/plugins/uniform/css/uniform.default.css') }}
    {{ HTML::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    @yield('pluginstyles')
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    @yield('pagestyles')
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    {{ HTML::style('assets/global/css/components.css') }}
    {{ HTML::style('assets/global/css/plugins.css') }}
    {{ HTML::style('assets/admin/layout/css/layout.css') }}
    {{ HTML::style('assets/admin/layout/css/themes/default.css') }}
    {{ HTML::style('assets/admin/layout/css/custom.css') }}
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="<?=asset('favicon.ico')?>"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="@yield('bodyclass')">

@yield('body')

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ HTML::script('assets/global/plugins/respond.min.js') }}
{{ HTML::script('assets/global/plugins/excanvas.min.js') }}
<![endif]-->
{{ HTML::script('assets/global/plugins/jquery-1.11.0.min.js') }}
{{ HTML::script('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}
{{ HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/global/plugins/jquery.blockui.min.js') }}
{{ HTML::script('assets/global/plugins/jquery.cokie.min.js') }}
{{ HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js') }}
{{ HTML::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('pluginscripts')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script("assets/global/scripts/metronic.js") }}
{{ HTML::script("assets/admin/layout/scripts/layout.js") }}
{{ HTML::script("assets/admin/layout/scripts/quick-sidebar.js") }}
{{ HTML::script("assets/admin/layout/scripts/demo.js") }}
@yield('pagescripts')
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
    });
</script>
@yield('scripts')
<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->
</html>
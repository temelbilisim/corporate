@extends("layouts.main")

@section("title") {{ Lang::get("login.title") }} @stop
@section("description") {{ Lang::get("login.description") }} @stop

@section("pagestyles")
    {{ HTML::style("assets/global/plugins/select2/select2.css") }}
    {{ HTML::style("assets/admin/pages/css/login-soft.css") }}
@stop

@section("pluginscripts")
    {{ HTML::script("assets/global/plugins/jquery-validation/js/jquery.validate.min.js") }}
    @if(File::exists(public_path()."/assets/global/plugins/jqueru-validation/js/lozalization/messages_".App::getLocale().".js"))
    {{ HTML::script("assets/global/plugins/jquery-validation/js/localization/messages_".App::getLocale().".js") }}
    @endif
    {{ HTML::script("assets/global/plugins/backstretch/jquery.backstretch.min.js") }}
    {{ HTML::script("assets/global/plugins/select2/select2.min.js") }}
@stop

@section("pagescripts")
    {{ HTML::script("assets/admin/pages/scripts/login-soft.js") }}
@stop

@section("scripts")
    <script type="text/javascript">
        Login.init();
        // init background slide images
        $.backstretch([
                    "{{ asset('assets/admin/pages/media/gallery/image1.jpg') }}",
                    "{{ asset('assets/admin/pages/media/gallery/image2.jpg') }}",
                    "{{ asset('assets/admin/pages/media/gallery/image3.jpg') }}",
                    "{{ asset('assets/admin/pages/media/gallery/image4.jpg') }}"
                ], {
                    fade: 1000,
                    duration: 8000
                }
        );
    </script>
@stop

@section("bodyclass") login @stop

@section("body")
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="{{ URL::route("homepage") }}">
            <img src="{{ asset('assets/admin/layout/img/logo-big.png') }}" alt=""/>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler"></div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        {{ Form::open(array("route" => "admin.login", "class" => "login-form")) }}
            <h3 class="form-title">{{ Lang::get('login.title') }}</h3>
            @if($errors->has())
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
			    @foreach($errors->all() as $error)
                <span>{{ $error }}</span><br />
                @endforeach
            </div>
            @endif
            <div class="form-group">
                {{ Form::label("username", Lang::get('user.username'), array("class" => "control-label visible-ie8 visible-ie9")) }}
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    {{ Form::text("username", Input::old('username'), array("class" => "form-control placeholder-no-fix", "autocomplete" => "off", "placeholder" => Lang::get("user.username"))) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label("password", Lang::get('user.password'), array("class" => "control-label visible-ie8 visible-ie9")) }}
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    {{ Form::password("password", array("class" => "form-control placeholder-no-fix", "autocomplete" => "off", "placeholder" => Lang::get("user.password"))) }}
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    {{ Form::checkbox("remember", 1, true) }} {{ Lang::get("login.remember") }}
                </label>
                <button type="submit" class="btn blue pull-right">
                    {{ Lang::get("login.login") }} <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
            <!-- Todo: Forgetten Password
            <div class="forget-password">
                <h4>{{ Lang::get("login.forgetten") }}</h4>
                <p>
                    {{ Lang::get("login.forgettendesc", array("linkstart" => "<a href='javascript:;' id='forget-password'>", "linkend" => "</a>")) }}
                </p>
            </div>
            -->
        {{ Form::close() }}
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn">
                    <i class="m-icon-swapleft"></i> Back </button>
                <button type="submit" class="btn blue pull-right">
                    Submit <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        {{ Config::get("owner.copyright") }}
    </div>
    <!-- END COPYRIGHT -->
@stop
@extends("layouts.main")

@section("title") {{ Lang::get("login.title") }} @stop

@section("body")
    @if($errors->has())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    {{ Form::open(array("route" => "admin.login")) }}
    {{ Form::text("username", Input::old("username")) }}
    {{ Form::password("password") }}
    {{ Form::checkbox("remember", 1, true) }}
    {{ Form::submit(Lang::get("login.login")) }}
    {{ Form::close() }}
@stop
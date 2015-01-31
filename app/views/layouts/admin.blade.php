@extends("layouts.main")

@section("body")
    @include("admin.sidebar")
    <div class="content">
        @yield("content")
    </div>
@stop
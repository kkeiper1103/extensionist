@extends("layouts.application")

@section("content")
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <h2 class="title">Sign In</h2>
        </div>
    </div>

    @include('auth._login')
@stop
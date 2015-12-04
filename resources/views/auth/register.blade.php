@extends("layouts.application")

@section("content")

    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <h2 class="title">Create Account</h2>
        </div>
    </div>

    <form method="POST" action="{{ url('auth/register') }}" class="form form-horizontal">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name" class="control-label col-sm-2">Name</label>

            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>

                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email</label>

            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="control-label col-sm-2">Password</label>

            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </div>

                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="control-label col-sm-2">Confirm Password</label>

            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </div>

                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>
@stop
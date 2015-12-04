<form method="POST" action="{{ url('auth/login') }}" class="form form-horizontal">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email" class="control-label col-sm-2">Email</label>

        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
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
        <div class="col-sm-10 col-sm-offset-2">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <a href="{{ url('auth/github') }}" class="btn btn-default btn-block">Login With Github <i class="fa fa-github"></i></a>
        </div>
    </div>
</form>
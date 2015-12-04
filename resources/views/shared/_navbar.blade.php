<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url() }}">
                <span>Extensionist</span>
                <em class="hidden-sm hidden-xs">The PHP Extension Repository</em>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('browse') }}">Browse Extensions</a></li>
                <li><a href="{{ url('packages/submit') }}">Submit</a></li>

                @if( Auth::guest() )
                <li><a href="{{ url('auth/register') }}">Create Account</a></li>
                <li class="login-form">
                    <a href="{{ url('auth/login') }}">Sign In</a>

                    <div class="login-form-container">
                        @include('auth._login')
                    </div>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/profile') }}">Profile Settings</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('auth/logout') }}">Log Out</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
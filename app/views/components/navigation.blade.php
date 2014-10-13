{{--
<div class="container">
    <div class="header">
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>
--}}



<nav class="navbar navbar-static-top navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
                    {{-- <a class="navbar-brand" href="#">Brand</a> --}}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                <li {{ (Request::is('about-us') ? ' class="active"' : '') }}><a href="{{{ URL::to('about-us') }}}">About Us</a></li>
                <li {{ (Request::is('news') ? ' class="active"' : '') }}><a href="{{{ URL::to('news') }}}">News</a></li>
                <li {{ (Request::is('catalogue') ? ' class="active"' : '') }}><a href="{{{ URL::to('catalogue') }}}">Catalogue</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <img class="visible-lg" src="{{asset('uploads/misc/logo_1.png')}}" alt="Supreme Decor"/>
                {{--
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



{{--
<div class="navbar navbar-static-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>


        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                <li {{ (Request::is('about-us') ? ' class="active"' : '') }}><a href="{{{ URL::to('about-us') }}}">About Us</a></li>
                <li {{ (Request::is('news') ? ' class="active"' : '') }}><a href="{{{ URL::to('news') }}}">News</a></li>
                <li {{ (Request::is('catalogue') ? ' class="active"' : '') }}><a href="{{{ URL::to('catalogue') }}}">Catalogue</a></li>
                <li><a href="{{{ URL::to('') }}}">Search</a></li>
            </ul>

            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <img src="{{asset('uploads/misc/logo_1.png')}}" alt="Supreme Decor"/>
               
                        @if (Auth::check())
                        @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                @endif
                <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                @else
                <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                @endif
               
            </ul>
            <!-- ./ nav-collapse -->
        </div>
    </div>
</div>

 --}}

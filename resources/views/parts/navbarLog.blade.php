<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav">
            <li>{!! link_to_route('home', 'WebSiteName') !!}</li>
            <li>{!! link_to_route('me', 'For me') !!}</li>
            <li>{!! link_to_route('get_login', 'Log In') !!}</li>
            <li>{!! link_to_route('get_register', 'Register') !!}</li>

        </ul>
    </div>
</nav>
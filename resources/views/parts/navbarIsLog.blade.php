<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome, {{ $currentUser['name'] }}</a>
        </div>
        <ul class="nav navbar-nav">
            <li>{!! link_to_route('get_sea', 'Sea') !!}</li>
            <li>{!! link_to_route('get_mountain', 'Mountain') !!}</li>
            <li>{!! link_to_route('get_spa', 'SPA') !!}</li>
            <li>{!! link_to_route('get_city', 'City') !!}</li>
            @if($currentUser['permission'] == true)
                <li>{!! link_to_route('get_admin', 'Admin page') !!}</li>
            @endif
            <li>{!! link_to_route('get_logout', 'Logout') !!}</li>
        </ul>
    </div>
</nav>
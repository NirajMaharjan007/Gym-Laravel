<nav class="navbar navbar-expand-lg navbar-light nav-color">
    @yield('navbar')
    <span class="navbar-brand center-alignment">
        <img src="{{ asset('img/logo-circular.png') }}" id="logo" class="d-inline-block align-top">
        <span class="ml-2 mr-4">fitness heros</span>
    </span>
    <div class="navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link nav-space" href="{{ route('landing-page') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-space" href="{{ route('the_classes') }}">Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-space" href="{{ route('pricing') }}">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-space" href="{{ route('about') }}">About Us</a>
            </li>
        </ul>
    </div>

    <span class="end-alignment">
        @if (Auth::check())
            <div class="flex-container end-alignment" style="margin-right:1ch;font-weight:500">
                <div class="dropdown">
                    <span class="center-alignment">
                        <button class="dropbtn btn-primary dropdown-toggle bold-center">
                            @if (Auth::user()->personal == true)
                                <img src="{{ url('uploads/' . Auth::user()->personal->picture) }}"
                                    alt="profile Picture" class="profile-pic">
                            @else
                                <img src="{{ asset('img/default.png') }}" class="profile-pic" alt="profile">
                            @endif
                            <span class="border-right"></span>
                            {{ Auth::user()->name }}
                        </button>
                    </span>
                    <div class="dropdown-content">
                        <a href="{{ route('user.dashboard') }}" class="border-first">Dashboard</a>
                        <a href="{{ route('user.profile') }}">Profile</a>
                        <a id="logout" href="{{ route('logout.perform') }}"
                            onclick="alert('You have been logged out')">Logout</a>
                    </div>
                </div>
            </div>
        @else
            <div class="flex-container end-alignment" style="font-weight:500;margin-right:1ch">
                <button class="btn-primary" id="login">
                    <a href=" {{ route('login') }}" style=" color:aliceblue" class="nav-link">Login</a>
                </button>
            </div>
        @endif
    </span>
</nav>

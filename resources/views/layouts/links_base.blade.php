<nav class="navbar fixed-top bg-faded text-center">
    <div class="links">

        <a href="{{route('home')}}">Home</a>
        <a href="{{url('jewelry')}}">Jewelry</a>

        @if (Auth::check())

            <a href="">***{{ Auth::user()->name }}***</a>

            @if (Auth::user()->isAdmin('admin'))
                <a href="{{ url('admin') }}">Admin Panel</a>
            @endif

            <a href="{{route('logout')}}">Sign Out</a>

        @else
            <a href="{{route('login')}}">Sign In</a>
            <a href="{{route('register')}}">Register</a>
        @endif

    </div>
</nav>
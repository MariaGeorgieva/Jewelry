<style>
    links > ul, a {
        color: #636b6f;
        /*padding: 0 10%;*/
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

</style>
<nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    <div class="links">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <a class="navbar-brand" href="{{route('home')}}">J.A.W.</a>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
        <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Jewelry</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="">***{{ Auth::user()->name }}***</a>
                </li>
                @if (Auth::user()->isAdmin('admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin') }}">Admin Panel</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Sign Out</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Sign In</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>


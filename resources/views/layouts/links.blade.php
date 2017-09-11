<div class="top-right links">

    @if (Auth::check())

    <a href="">***{{ Auth::user()->name }}***</a>

    @if (Auth::user()->isAdmin('admin'))
    <a href="/admin">Admin Panel</a>
    @endif

    <a href="{{route('logout')}}">Sing Out</a>

    @else
    <a href="{{url('login')}}">Sign In</a>
    <a href="{{route('register')}}">Register</a>
    @endif

</div>


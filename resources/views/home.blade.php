<h1>Bonjour {{Auth::user()->name}}</h1>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
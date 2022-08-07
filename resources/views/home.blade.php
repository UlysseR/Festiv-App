<h1>Bonjour {{Auth::user()->name}}</h1>

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

<form action="{{ route('user.index') }}">
    <button type="submit" class="btn btn-primary">Mon compte</button>
</form>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
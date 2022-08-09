@extends('layouts.app')

@section('content')

<h1>Bonjour {{Auth::user()->name}}</h1>



<form action="{{ route('user.index') }}">
    <button type="submit" class="btn btn-primary">Mon compte</button>
</form>

<form action="{{ route('post.create') }}">
    <button type="submit" class="btn btn-primary">Ajouter une image</button>
</form>

<form action="{{ route('post.index') }}">
    <button type="submit" class="btn btn-primary">Galerie photos</button>
</form>


<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Me déconecter</button>
</form>


@endsection


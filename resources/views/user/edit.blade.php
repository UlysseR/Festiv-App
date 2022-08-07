@extends('layouts.app')

@section('content')

<h1>Modification du profil</h1>

    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Appliquer</button>
    </form>

@endsection


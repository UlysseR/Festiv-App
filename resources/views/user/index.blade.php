@extends('layouts.app')

@section('content')

<h1>Mon Profil</h1>

        <div class="form-group">
            <label for="name">Nom :</label>
            <label>{{Auth::user()->name}}</label>
        </div>
        <div class="form-group">
            <label for="name">Email :</label>
            <label>{{Auth::user()->email}}</label>
        </div>  
        <form action="{{ route('user.edit')}}" >     
        <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
        <form action="{{ route('user.home')}}" >     
            <button type="submit" class="btn btn-primary">Retour</button>
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Me déconecter</button>
            </form>

            
    
@endsection



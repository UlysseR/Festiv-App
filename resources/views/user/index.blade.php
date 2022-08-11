@extends('layouts.app')

@section('content')

<br>
<br>

<hr>
        <div class="form-group">
            <label for="name">Nom :</label>
            <label>{{Auth::user()->name}}</label>
        </div>
<hr>
        <div class="form-group">
            <label for="name">Email :</label>
            <label>{{Auth::user()->email}}</label>
        </div> 
<hr>    

<br>

            <a href="{{ route('user.edit') }}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-gray-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Modifier </a>

            <br>
            <br>

            <a class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-gray-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Se déconnecter
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            
    
@endsection



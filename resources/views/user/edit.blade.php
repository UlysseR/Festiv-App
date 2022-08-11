@extends('layouts.app')

@section('content')

    <form action="{{ route('user.update') }}" method="POST">
        @csrf
            <div class="flex flex-col">
                <label for="text" class="mb-2 font-semibold">Nom</label>
                <input type="text" name="name"class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" value="{{Auth::user()->name}}" />
              </div>
            <br>
            <div class="mb-4 flex flex-col">
                <label for="email" class="mb-2 font-semibold">Email </label>
                  <input type="email" name="email" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" value="{{Auth::user()->email}}"/>
            </div>
        
              <button type="submit" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-gray-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Modifier</button>

    </form>
    
              
@endsection


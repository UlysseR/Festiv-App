@extends('layouts.app')

@section('content')

<br>
<br>


<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="max-w-2xl mx-auto">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Choisir une photo</label>
    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="path" id="file_input" type="file">
    <br>
    <div class="form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"for="festival">Nom du festival</label>
        <input type="text"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="festival" >
    </div>
    <br>
    <br>
    
    <button type="submit" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-gray-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Ajouter</button>
    
</form>



@endsection

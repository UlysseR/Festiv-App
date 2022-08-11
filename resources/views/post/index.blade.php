@extends('layouts.app')

@section('content')



    @foreach($posts as $post)
    
    <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
        <div class="w-full flex justify-between p-3">
          <div class="flex">
            <span class="pt-1 ml-2 font-bold text-sm">Nom du festival : {{$post->festival}}</span>
          </div>
          <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
        </div>
        <img class="w-full bg-cover" src="{{".".Storage::url($post->path)}}">
    </div>
   
        
    @endforeach


@endsection


    
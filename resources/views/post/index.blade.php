@extends('layouts.app')

@section('content')

<div>
    @foreach($posts as $post)
        <img src="{{".".Storage::url($post->path)}}">
    @endforeach
</div>

@endsection
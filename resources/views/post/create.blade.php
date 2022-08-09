@extends('layouts.app')

@section('content')

<label for="path">Choisir une photo</label>

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control-file" name="path">
    </div>
    <button type="submit" class="btn btn-primary">Poster</button>
</form>

@endsection

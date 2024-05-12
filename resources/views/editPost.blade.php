@extends('layout')
@section('title', 'create Post')

@section('content')
<form method="post" action='{{"/posts/$post->id"}}'>
    @csrf
    @method('put')
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" value='{{$post->title}}'>
    </div>
    @error('title')

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
    <div>
        <label for="title">Description: </label>
        <input type="text" name="description" id="description" value='{{$post->description}}'>
    </div>
    @error('description')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
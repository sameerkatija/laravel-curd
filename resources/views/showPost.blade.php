@extends('layout')

@section('title', "$post->title")

@section('content')

@if (session()->has('EditSuccess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('EditSuccess')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h2>Title: {{$post->title}}</h2>
<p><strong>{{$post->description}}</strong></p>
<div>
    <a class="btn btn-primary" href='{{"/posts/$post->id/edit"}}'>Edit Post</a>
</div>
<form method="POST" action='{{"/posts/$post->id"}}'>
    @csrf
    @method('DELETE')
    <div>
        <button class="btn btn-danger">Delete Button</button>
    </div>
</form>
@endsection
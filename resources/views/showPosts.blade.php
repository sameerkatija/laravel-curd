@extends('layout')

@section('title' , 'Show Posts')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('deleteSuccess'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('deleteSuccess')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div>
    <div>
        <button class="btn btn-success"><a class="text-white" href="/posts/new">Create Posts</a></button>
    </div>
    @foreach ($posts as $post)
    <h2>Title: <a href='{{ "/posts/$post->id" }}'>{{$post->title}}</a></h2>
    <p>{{$post->description}}</p>
    @endforeach
</div>
@endsection
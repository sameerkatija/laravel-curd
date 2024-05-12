@extends('layout')

@section('title', 'HomePage')

@section('style')
<style>
    a {
        text-decoration: none;
    }
</style>
@endsection

@section('content')
<div class="container">
    <button class="btn btn-primary"><a class="text-white" href="/posts">Show Posts</a></button>
    <button class="btn btn-success"><a class="text-white" href="/posts/new">Create Posts</a></button>

</div>
@endsection
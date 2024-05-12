<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('showPosts', ['posts' => $posts]);
});
Route::post('/posts', function (Request $req) {
    $data = $req->validate([
        'title' => 'required|max:255',
        'description' => 'required'
    ]);
    $post = new Post();
    $post->title = $data['title'];
    $post->description = $data['description'];

    $post->save();
    return redirect('/posts')->with('success', 'Post created successfully!');
});
Route::get('/posts/new', function () {
    return view('createPosts');
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('showPost', ['post' => $post]);
});

Route::delete('/posts/{id}', function ($id) {
    $post = Post::find($id);
    $post->delete();
    return redirect('/posts')->with('deleteSuccess', 'Post Deleted SuccessFully');
});

Route::get('/posts/{id}/edit', function ($id) {
    $post = Post::find($id);
    return view('editPost', ['post' => $post]);
});

Route::put('/posts/{id}', function ($id, Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required'
    ]);
    $post = Post::find($id);
    $post->title = $data['title'];
    $post->description = $data['description'];
    $post->save();

    return redirect("/posts/$id")->with('EditSuccess', "post Edited SuccessFully");
});

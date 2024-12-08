<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Show All of the posts
     */
    public function index()
    {

    $posts = Post::orderBy('id', 'desc')->get();

    return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show method - Show details of post (detail view)
     */
    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Create posts form
     */
    public function create()
    {
        return view('posts.create',  ['post' => new Post]);
    }

     /**
     * Store post into the DB
     */
    public function store(SavePostRequest $request)
    {

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        Post::create($request->validated());

        //redirect to posts.index and send alert
        return to_route('posts.index')->with('status', 'Post Created!');
    }

    /**
     * Edit post form
     */
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update post in the db
     */
    public function update(SavePostRequest $request, Post $post) {
        

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post Edited!');
    }

    /**
     * Delete post
     */
    public function destroy(Post $post) {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post Deleted!');
    }
}

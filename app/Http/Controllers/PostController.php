<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Show titles of articles (posts)
     */
    public function index()
    {

    $posts = Post::get();

    return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show method
     */
    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Create post
     */
    // public function create()
    // {
    //     return 'create form';
    // }
}

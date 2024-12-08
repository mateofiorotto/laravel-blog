<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
    //rewrite the name of x table, eloquent asumes that the table is "posts"
    // protected $table = 'articles';

    //php artisan tinker (for get, find, save, etc..)
    //ctrl + c to close tinker

    //Post::get(); --> post list
    //Post::find($id); --> post for id
    //Post::save(); --> save post
    //Post::delete(); --> delete post
}

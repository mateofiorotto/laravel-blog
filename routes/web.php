<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//blog.test => welcome
//blog.test/contact => contact
//blog.test/blog => blog
//blog.test/about => about

Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

//IMPORTANT: If a route receive variable parameters, will be included at the final
// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => [
        'blog' => 'post',
    ],
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

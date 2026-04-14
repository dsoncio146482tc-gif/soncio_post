<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\BookController;

// --- ACTIVITY 1 & 2 ROUTES ---

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello, World!',
        'name' => 'John Doe',
        'age' => 30,
        'tasks' => [
            'Learn Laravel',
            'Build a project',
            'Deploy to production',
        ],
    ]);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/formtest', function(){
    $posts = Post::all();
    return view('formtest', ['posts' => $posts]);
});

Route::post('/formtest', function(){
    Post::create([
        'description' => request('description'),
    ]);
    return redirect('/formtest');
});

Route::delete('/formtest/{id}', function ($id) {
    Post::findOrFail($id)->delete();
    return redirect('/formtest');
});

Route::get('/delete', function(){
    Post::truncate();  
    return redirect('/formtest');
});



Route::get('/posts', function(){
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('posts.show', ['post' => $post]);
});

Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', ['post' => $post]);
});

Route::patch('/posts/{post}', function (Post $post) {
    $post->update([
        'description' => request('description'),
        'updated_at' => now(),
    ]);
    return redirect('/posts' . '/' . $post->id);
});




Route::get('/register', [UserController::class, 'index']); 


Route::post('/register-user', [UserController::class, 'store']); 


Route::get('/edit-user/{user}', function (User $user) {
    return view('edit_user', ['user' => $user]);
});


Route::patch('/update-user/{user}', function (User $user) {
    $user->update(request()->all());
    return redirect('/register')->with('success', 'User updated successfully!');
});


Route::delete('/delete-user/{id}', [UserController::class, 'destroy']);

Route::resource('books', BookController::class);
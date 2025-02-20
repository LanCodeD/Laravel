<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Ruta directa a welcome con el nombre /
//Ruta directa a contact con el nombre contacto
//Ruta directa a blog con el nombre blog
//Ruta directa a about con el nombre nosotros

Route::view("default","default")->name('default');
Route::view("/","welcome")->name('inicio');
//uri: nombre que se asigna, viewe nombre del archivo a buscar en la carpeta
Route::view("contacto","contact")->name('contacto');

/* Route::get("blog",PostController::class)->name('posts.index');
Route::get('/blog/crear',[PostController::class,'create'])->name('posts.create');
Route::post('/blog',[PostController::class,'store'])->name('posts.store');
Route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('/blog/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::patch('/blog/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/blog/{post}',[PostController::class,'destroy'])->name('posts.destroy'); */

Route::resource('blog', PostController::class,[
    'names' => 'posts',
    'parameters' =>[
        'blog' => 'post',
    ],
]);


// Route::view("blog","blog")->name('blog');
Route::view("nosotros","about")->name('nosotros');


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

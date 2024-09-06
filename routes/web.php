<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class,'hello']);


Route::get('/world', function () {
    return 'World';
   });

   Route::get('/index', [WelcomeController::class,'index']);


   Route::get('/about', [WelcomeController::class,'about']);

   Route::get('/articles', [WelcomeController::class,'articles']);

   Route::resource('photos', PhotoController::class);


   Route::get('/user/{name}', function ($name) { 
    return 'Nama saya Muhammad Ivan Yoda Bellamy'; 
    });

    Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
    }); 

    Route::get('/articles/{id}', function ($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    });

    Route::get('/user/{name?}', function ($name='Ivan') {
        return 'Nama saya '.$name; 
        });

        Route::resource('photos', PhotoController::class)->only([
            'index', 'show'
           ]);
           Route::resource('photos', PhotoController::class)->except([
            'create', 'store', 'update', 'destroy'
           ]);

        
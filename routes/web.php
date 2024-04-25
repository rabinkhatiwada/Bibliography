<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/socialmedia', function () {
    return view('socialmedia');
});

Route::get('/blog', [PostController::class, 'blogview'])->name('blog.view');
Route::get('/blog/{id}', [PostController::class, 'postdetail'])->name('post.show');



Route::get('/contactme',[ContactController::class,'contactme']);
Route::post('/sendmsg',[ContactController::class,'sendmsg']);

Route::match(['GET','POST'],'/login', [LoginController::class, 'login'])->name('login');
Route::match(['GET','POST'],'/register', [LoginController::class, 'register'])->name('register');
Route::match(['GET', 'POST'], '/logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/msg', [ContactController::class, 'msg'])->name('msg');
    Route::get('/msg/detail/{id}', [ContactController::class, 'msgdetail'])->name('msg.detail');
    Route::get('/msg/delete/{id}', [ContactController::class, 'msgdelete'])->name('msg.delete');


    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('', [PostController::class, 'store'])->name('store');
        Route::get('edit/{id}/edit', [PostController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PostController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('settings')->name('settings.')->group(function(){
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'],'/home', [SettingController::class, 'homepage'])->name('homepage');
        Route::match(['GET', 'POST'],'/about', [SettingController::class, 'aboutpage'])->name('aboutpage');
        Route::match(['GET', 'POST'],'/footer', [SettingController::class, 'footer'])->name('footer');

    });

    // Admin panel route
    Route::get('/admin', function () {
        return view('admin.adminpanel');
    })->name('adminpanel');
});

Route::get('/admin', function () {
    // Redirect to login page if not authenticated
    return redirect()->route('login');
});


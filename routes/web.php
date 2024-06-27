<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Innov;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/test',function(){
    return view('admin.index');
});

Route::get('/chat',function(){
    return view('chat');
})->name('chat');

Route::get('/profil',function(){
    return view('profil');
})->name('profil');

Route::get('/create',function(){
    return view('create');
});
Route::get('/demo',function(){
    return view('demo');
});
Route::get('/innovation', [Innov::class, 'index'])->name('innovation');

Route::get('/projet',function(){
    return view('projet');
})->name('projet');
Route::get('/annonce',function(){
    return view('annonce');
})->name('annonce');

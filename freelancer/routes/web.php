<?php


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',function(){
    return 'you are admin';
})->middleware(['auth','auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});

Route::resource('profile','ProfileController');
Route::resource('major','MajorController');
Route::resource('projects','ProjectController');
Route::resource('posts','PostController');




<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//static pages
Route::view('/','html/index');
Route::view('/datenschutz.html','html/datenschutz');
//pl
Route::view('/pl/index.html','html/pl/index');
Route::view('/pl/privacy.html','html/pl/privacy');

//ro
Route::view('/ro/index.html','html/ro/index');
Route::view('/ro/privacy.html','html/ro/privacy');
//ru
Route::view('/ru/index.html','html/ru/index');
Route::view('/ru/privacy.html','html/ru/privacy');
//en
Route::view('/en/index.html','html/en/index');
Route::view('/en/privacy.html','html/en/privacy');


Route::get('/{lang}/apply.html', App\Http\Livewire\Apply::class); 
Route::get('/{lang}/personal.html', App\Http\Livewire\Personal::class);

// user routes
Route::get('/login',App\Http\Livewire\Auth\Login::class)->name('login');
Route::post('/login',[App\Http\Livewire\Auth\Login::class,'login'])->name('login');
Route::get('/logout',[App\Http\Livewire\Auth\Login::class,'logout'])->name('logout');


Route::group([
    'middleware' => ['auth.user']
], function ()
{
    Route::get('/home',App\Http\Livewire\Home::class)->name('home.index');
    Route::get('/user',App\Http\Livewire\User\User::class)->name('user.index');
    Route::get('/employee',App\Http\Livewire\Employee\Employee::class)->name('employee.index');
    Route::get('/settings',App\Http\Livewire\Settings::class)->name('settings.index');
    Route::get('/profile',App\Http\Livewire\Profile::class)->name('profile.index');

});





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


// static pages
// work pages
Route::view('/','html/index');
Route::view('/index.html','html/index');
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

// service pages
Route::view('/de/service.html','html/de/service');
Route::view('/de/privacy.html','html/de/privacy');

Route::get('/{lang}/apply', App\Livewire\Apply::class);
Route::post('/{lang}/apply', App\Livewire\Apply::class);

Route::get('/{lang}/personal', App\Livewire\Personal::class);

// user routes
//Route::get('/login',App\Livewire\Auth\Login::class)->name('login');
Route::post('/login',[App\Livewire\Auth\Login::class,'login'])->name('login');
Route::get('/logout',[App\Livewire\Auth\Login::class,'logout'])->name('logout');


//Route::group([
//    'middleware' => ['auth.user']
//], function ()
//{
    
    Route::get('/home',App\Livewire\Home::class)->name('home.index');
    //Route::get('/user',App\Livewire\User\User::class)->name('user.index');
    //Route::get('/employee',App\Livewire\Employee\Employee::class)->name('employee.index');
    Route::get('/settings',App\Livewire\Settings::class)->name('settings.index');
    Route::get('/profile',App\Livewire\Profile::class)->name('profile.index');

//});





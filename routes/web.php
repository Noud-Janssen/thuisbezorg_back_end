<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Items;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home');
})->name("home.page");

//Menu
Route::get('/menu', function () {
    return view('menu', ['items' => App\Models\food_item::all()]);
});
Route::get('/menu/{item}', function (App\Models\food_item $item) {
    return view('item', [
        'item' => $item
    ]);
});


//Contact
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'contactPost'])->name("contact.post");


//Account
Route::get('/users', function() {
    return redirect()->route('home.page');
});

Route::get('/users/login', function() {
    return view('User.login');
});
Route::get('/users/register', function() {
    return view('User.register');
});
Route::post('/users/login', [UserController::class, 'loginRequest'])->name("users.post");
Route::post('/users/register', [UserController::class, 'register'])->name("users.register");
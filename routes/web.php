<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Message;
use App\Models\Reservations;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Food_itemController;
use App\Http\Controllers\ReservationsController;

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
    return view('menu', ['items' => App\Models\Food_item::all()]);
})->name('menu');


Route::get('/menu/{item}', function (App\Models\Food_item $item) {
    return view('item', [
        'item' => $item
    ]);
})->name('menu.detail');

Route::post('/admin/menu', [Food_itemController::class, 'postHandler'])->name("items.crud");


//Contact
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'contactPost'])->name("contact.post");
Route::post('/admin/messages', [ContactController::class, 'markRead'])->name('contact.mark_read');

//Reservations
Route::get('/reserveren' , function() {
    return view('reservation');
});
Route::post('/reserveren', [ReservationsController::class, "create"])->name('reservations.create');
Route::post('/admin/reservations', [ReservationsController::class, "edit"])->name('reservations.edit');

Route::group(['middleware'=>'guest'], function() {
    //Account
    Route::get('/users', function() {
        return redirect()->route('login');
    });

    Route::get('/users/login', function() {
        return view('User.login');
    })->name('login');

    Route::get('/users/register', function() {
        return view('User.register');
    });

    Route::post('/users/login', [AuthController::class, 'login'])->name("users.post");
    Route::post('/users/register', [AuthController::class, 'register'])->name("users.register");
});

Route::group(['middleware'=>'auth'], function() {
    //Account
    Route::get('/users', function() {
        return redirect()->route('admin.main');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name("users.logout");

    //Admin
    Route::get('/admin', function() {
        return view("admin.main");
    })->name('admin.main');

    Route::get('/admin/menu', function() {
        return view("admin.menu_items", ["items"=>App\Models\Food_item::all()]);
    })->name('admin.menu');

    Route::get('/admin/messages', function() {
        return view("admin.messages",["messages"=>Message::all()]);
    })->name('admin.messages');

    Route::get('/admin/reservations', function() {
        return view("admin.reservations",["reservations"=>Reservations::all()]);
    })->name('admin.reservations');
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\LoginController;

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);

route::get('/',[AdminController::class, 'home']);

route::get('/terms',[AdminController::class, 'terms'])->name('terms');

route::get('/index', [AdminController::class, 'index'])->name('home');

route::get('/home', [AdminController::class, 'index'])->name('admin.index');

route::get('/create_room',[AdminController::class, 'create_room'])->middleware(['auth','admin']);

route::post('/add_room',[AdminController::class, 'add_room'])->middleware(['auth','admin']);

route::get('/view_room',[AdminController::class, 'view_room'])->middleware(['auth','admin']);

route::get('/room_delete/{id}',[AdminController::class, 'room_delete'])->middleware(['auth','admin']);

route::get('/room_update/{id}',[AdminController::class, 'room_update'])->middleware(['auth','admin']);

route::post('/edit_room/{id}',[AdminController::class, 'edit_room'])->middleware(['auth','admin']);

route::get('/room_details/{id}',[HomeController::class, 'room_details']);

route::post('/add_booking/{id}',[HomeController::class, 'add_booking'])->middleware(['auth','user']);

route::get('/bookings',[AdminController::class, 'bookings'])->middleware(['auth','admin']);

route::get('/delete_booking/{id}',[AdminController::class, 'delete_booking'])->middleware(['auth','admin']);

route::get('/approve_book/{id}',[AdminController::class, 'approve_book'])->middleware(['auth','admin']);

route::get('/reject_book/{id}',[AdminController::class, 'reject_book'])->middleware(['auth','admin']);

Route::get('/show',[AdminController::class, 'show'])->name('profile.show');

route::get('/view_gallary',[AdminController::class, 'view_gallary'])->middleware(['auth','admin']);

route::post('/upload_gallary',[AdminController::class, 'upload_gallary'])->middleware(['auth','admin']);

route::get('/delete_gallary/{id}',[AdminController::class, 'delete_gallary'])->middleware(['auth','admin']);

route::post('/contact',[HomeController::class, 'contact']);

route::get('/all_messages',[AdminController::class, 'all_messages'])->middleware(['auth','admin']);

route::get('/send_mail/{id}',[AdminController::class, 'send_mail'])->middleware(['auth','admin']);

route::post('/mail/{id}',[AdminController::class, 'mail'])->middleware(['auth','admin']);

route::get('/our_rooms',[HomeController::class, 'our_rooms']);

route::get('/about_us',[HomeController::class, 'about_us']);

route::get('/hotel_gallary',[HomeController::class, 'hotel_gallary']);

route::get('/contact_us',[HomeController::class, 'contact_us']);

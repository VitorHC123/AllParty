<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('allparty.body_index.index');
});

Route::get('/about', function () {
    return view('allparty.about.index');
});

Route::get('/rent-venue', function () {
    return view('allparty.rent_venue.index');
});

Route::get('/shows-events', function () {
    return view('allparty.shows_events.index');
});

Route::get('/tickets', function () {
    return view('allparty.tickets.index');
});

Route::get('/event-details', function () {
    return view('allparty.event_details.index');
});


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Account\AccountManagementController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/ticket-details', function () {
        return view('allparty.ticket_details.index');
    });
});

// Em web.php

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'show'])->name('admin.dashboard');

    Route::get('/account-management', [AccountManagementController::class, 'show_accounts'])->name('admin.accountManagement.index'); 
    Route::get('/edit-users', [AccountManagementController::class, 'editScreen']);
    Route::get('/admin/accounts/{id}/edit', [AccountManagementController::class, 'editUser'])->name('admin.accountManagement.edit');
    Route::put('/admin/accounts/update', [AccountManagementController::class, 'updateUser'])->name('admin.accountManagement.update');
    Route::delete('/admin/accounts/{id}', [AccountManagementController::class, 'deleteUser'])->name('admin.accountManagement.delete');

});

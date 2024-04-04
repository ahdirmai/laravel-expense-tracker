<?php

use App\Http\Controllers\Admin\UsersAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\user\TransactionController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/admin/users', [UsersAccountController::class, 'index'])->name('admin.users.index');
    });


    Route::group(['middleware' => 'role:user'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard.index');

        // Transaction
        Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
        Route::get('/transaction/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');
        Route::PUT('/transaction/{id}', [TransactionController::class, 'update'])->name('transaction.update');
        Route::DELETE('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');
        Route::GET('/transaction/{id}/image', [TransactionController::class, 'getImage'])->name('transaction.get-image');
    });
});



require __DIR__ . '/auth.php';

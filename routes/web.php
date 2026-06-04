<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisputeController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| BoostXVN real Laravel MVC routes
|--------------------------------------------------------------------------
| Bản này dùng route/controller/form/database thật. CSS/JS vẫn là file public
| để không phụ thuộc Vite/Tailwind trong quá trình chạy local.
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/marketplace', [MarketplaceController::class, 'index'])->name('marketplace.index');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/help', [HelpController::class, 'index'])->name('help.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::post('/orders/{order}/accept', [OrderController::class, 'accept'])->name('orders.accept');
    Route::get('/orders/{order}/room', [OrderController::class, 'room'])->name('orders.room');
    Route::post('/orders/{order}/messages', [ChatController::class, 'store'])->name('orders.messages.store');
    Route::post('/orders/{order}/submit', [OrderController::class, 'submit'])->name('orders.submit');
    Route::post('/orders/{order}/complete', [OrderController::class, 'complete'])->name('orders.complete');

    Route::get('/wallet', [WalletController::class, 'index'])->name('wallet.index');
    Route::post('/wallet/deposit', [WalletController::class, 'deposit'])->name('wallet.deposit');

    Route::get('/dashboard', function () {
        return auth()->user()->role === 'booster'
            ? redirect()->route('dashboard.booster')
            : redirect()->route('dashboard.customer');
    })->name('dashboard');
    Route::get('/dashboard/customer', [DashboardController::class, 'customer'])->name('dashboard.customer');
    Route::get('/dashboard/booster', [DashboardController::class, 'booster'])->name('dashboard.booster');

    Route::get('/disputes/create', [DisputeController::class, 'create'])->name('disputes.create');
    Route::post('/disputes', [DisputeController::class, 'store'])->name('disputes.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/disputes', [AdminController::class, 'disputes'])->name('disputes');
});

// Giữ bản giao diện demo nguyên khối để đối chiếu khi cần.
Route::view('/demo-ui', 'boostxvn.index')->name('demo.ui');

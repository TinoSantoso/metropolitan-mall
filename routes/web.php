<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MagazineController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register','register')->name('register');
    Route::post('register', 'registerSave' )->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('tenant')->group(function () {
        Route::get('', [TenantController::class, 'index'])->name('tenant');
        Route::get('create', [TenantController::class, 'create'])->name('tenant.create');
        Route::post('store', [TenantController::class, 'store'])->name('tenant.store');
        Route::get('show/{id}', [TenantController::class, 'show'])->name('tenant.show');
        Route::get('edit/{id}', [TenantController::class, 'edit'])->name('tenant.edit');
        Route::put('edit/{id}', [TenantController::class, 'update'])->name('tenant.update');
        Route::delete('destroy/{id}', [TenantController::class, 'destroy'])->name('tenant.destroy');
        Route::get('/save-tenants', [TenantController::class, 'getAllTenants'])->name('tenant.save');
    });

    Route::prefix('news')->group(function () {
        Route::get('', [NewsController::class, 'index'])->name('news');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('store', [NewsController::class, 'store'])->name('news.store');
        Route::get('show/{id}', [NewsController::class, 'show'])->name('news.show');
        Route::get('edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('update/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('destroy/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });

    Route::controller(PromoController::class)->prefix('promo')->group(function () {
        Route::get('', 'index')->name('promo');
        Route::get('create', 'create')->name('promo.create');
        Route::post('store', 'store')->name('promo.store');
        Route::get('show/{id}', 'show')->name('promo.show');
        Route::get('edit/{id}', 'edit')->name('promo.edit');
        Route::put('edit/{id}', 'update')->name('promo.update');
        Route::delete('destroy/{id}', 'destroy')->name('promo.destroy');
    });

    Route::controller(MagazineController::class)->prefix('magazines')->group(function () {
        Route::get('', 'index')->name('magazines');
        Route::get('create', 'create')->name('magazines.create');
        Route::post('store', 'store')->name('magazines.store');
        Route::get('show/{id}', 'show')->name('magazines.show');
        Route::get('edit/{id}', 'edit')->name('magazines.edit');
        Route::put('edit/{id}', 'update')->name('magazines.update');
        Route::delete('destroy/{id}', 'destroy')->name('magazines.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('event');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('news');
Route::prefix('media')->group(function () {
    Route::get('/', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index');

    // Define media.show route without auth middleware and specify the layout
    Route::get('/show/{id}', [App\Http\Controllers\MediaController::class, 'show'])
        ->name('media.show')
        ->withoutMiddleware('auth')
        ->middleware('web');
});
Route::get('/directory', [App\Http\Controllers\DirectoryController::class, 'index'])->name('directory');
Route::get('/directory', [App\Http\Controllers\DirectoryController::class, 'search'])->name('search');


Route::get('/facilities', function () {
    return view('facilities.facilities');
});

Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
});

Route::get('/contactus', function () {
    return view('contactus.contactus');
});

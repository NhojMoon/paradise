<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CottageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(CottageController::class)->prefix('cottage')->group(function () {
        Route::get('', 'index')->name('cottage');
        Route::get('create', 'create')->name('cottage.create');
        Route::post('store', 'store')->name('cottage.store');
        Route::get('show/{id}', 'show')->name('cottage.show');
        Route::get('edit/{id}', 'edit')->name('cottage.edit');
        Route::put('edit/{id}', 'update')->name('cottage.update');
        Route::delete('destroy/{id}', 'destroy')->name('cottage.destroy');
    });

    Route::controller(CustomerController::class)->prefix('customer')->group(function () {
        Route::get('', 'index')->name('customer');
        Route::get('create', 'create')->name('customers.create');
        Route::post('store', 'store')->name('customers.store');
        Route::get('show/{id}', 'show')->name('customers.show');
        Route::get('edit/{id}', 'edit')->name('customers.edit');
        Route::put('edit/{id}', 'update')->name('customers.update');
        Route::delete('destroy/{id}', 'destroy')->name('customers.destroy');
    });

    Route::controller(RentalController::class)->prefix('rental')->group(function () {
        Route::get('', 'index')->name('rental');
        Route::get('create', 'create')->name('rentals.create');
        Route::post('store', 'store')->name('rentals.store');
        Route::get('show/{id}', 'show')->name('rentals.show');
        Route::get('edit/{id}', 'edit')->name('rentals.edit');
        Route::put('edit/{id}', 'update')->name('rentals.update');
        Route::delete('destroy/{id}', 'destroy')->name('rentals.destroy');
    });

    Route::controller(AdminController::class)->prefix('admin')->group(function () {
        Route::get('', 'index')->name('admin');
        Route::get('create', 'create')->name('admin.create');
        Route::post('store', 'store')->name('admin.store');
        Route::get('show/{id}', 'show')->name('admin.show');
        Route::get('edit/{id}', 'edit')->name('admin.edit');
        Route::put('edit/{id}', 'update')->name('admin.update');
        Route::delete('destroy/{id}', 'destroy')->name('admin.destroy');
    });

    Route::get('/dashboard', [DashboardController::class, 'showdashboard'])->name('dashboard');
    Route::post('/customer', [CustomerController::class,'store']);
    Route::post('/rental', [RentalController::class,'store']);
    Route::post('/rental', [RentalController::class,'store']);
    

 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
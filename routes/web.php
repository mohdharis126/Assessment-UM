<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\UserController;
use App\Models\Asset;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('/pengurusan_pengguna')->group(function () {
        Route::get('/index', [AssetController::class, 'index'])->name('pp.index');
        Route::get('/create', [AssetController::class, 'create'])->name('pp.create');
        Route::post('/store', [AssetController::class, 'store'])->name('pp.store');
        Route::get('/edit/{asset}', [AssetController::class, 'edit'])->name('pp.edit');
        Route::put('/update/{asset}', [AssetController::class, 'update'])->name('pp.update');
        Route::delete('/delete/de/{asset}', [AssetController::class, 'delete'])->name('pp.delete');

        // Route::get('/pengurusan_pengguna/generate', [AssetController::class, 'generate']);
        // Route::delete('delete/{asset}', [AssetController::class, 'delete']); 
    });
    Route::get('/pengurusan_pengguna/lantikan_index', [UserController::class, 'index']);
    Route::get('/pengurusan_pengguna/lantikan_edit/{user}', [UserController::class, 'edit'])->name('uc.edit');
    Route::put('/pengurusan_pengguna/lantikan_update/{user}', [UserController::class, 'update'])->name('uc.update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SuiviPagination;

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


Route::get('suivis/liste', [App\Http\Controllers\SuiviController::class, 'index'])->name('suivis.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // Route::post('suivis/liste', [App\Http\Controllers\SuiviController::class, 'story']);
    Route::post('suivis/liste', [App\Http\Controllers\SuiviController::class, 'store']);
    Route::get('suivis/liste/show/{id}', [App\Http\Controllers\SuiviController::class, 'show'])->name('suivis.show');
    // Route::get('/jobs/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
    Route::get('suivis/liste/suivis/edit/{id}', [App\Http\Controllers\SuiviController::class, 'edit'])->name('suivis.edit');
    Route::patch('suivis/liste/suivis/{id}', [App\Http\Controllers\SuiviController::class, 'update']);
    Route::get('export', [App\Http\Controllers\SuiviController::class, 'export'])->name('export');
    Route::post('suivis', [App\Http\Controllers\SuiviController::class, 'import'])->name('import');
});

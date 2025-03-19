<?php

use App\Http\Controllers\CashTransactionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DailyBalanceController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', action: [HomeController::class, 'index'])->name('home');

Route::get('/transactions/create', action: [CashTransactionController::class, 'create'])->name('cashtransactions.create');
Route::get('/transactions/detail/{id}', action: [CashTransactionController::class, 'show'])->name('cashtransactions.show');

Route::post('/transactions', [CashTransactionController::class, 'store'])->name('cashtransactions.store');

Route::resource('companies', CompanyController::class);


Route::get('/daily/balances', [DailyBalanceController::class, 'index'])->name('daily.balances');
Route::get('/daily/balances/detail/{id}', [DailyBalanceController::class, 'detail'])->name('daily.balances.detail');
Route::post('daily/balances/{dailyBalance}/update-status', [DailyBalanceController::class, 'updateStatus'])->name('daily_balances.update-status');

Route::get('/daily/balance/open', [DailyBalanceController::class, 'openDay'])->name('daily.balance.open');
Route::get('/daily/balance/close', [DailyBalanceController::class, 'closeDay'])->name('daily.balance.close');

Route::resource('expenses', ExpenseController::class);

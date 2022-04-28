<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Example\FirstController;

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


 //_Email Verification
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//_This Route show verification notice Page
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//_Email Verification System Route on a blade file
Route::get('/deposit/money', [FirstController::class, 'deposit'])->name('deposit.money')->middleware('verified');

//_Change Password Route
Route::get('/change/password', [FirstController::class, 'changePassword'])->name('change.password')->middleware('verified');

Route::post('/change/password/update', [FirstController::class, 'updatePassword'])->name('update.password')->middleware('verified');

//_Encrypt Route Example
Route::get('/user/details/{id}', [FirstController::class, 'details'])->name('user.detail');

//_Hashing Example
Route::post('/store/user', [FirstController::class, 'store'])->name('store.user');






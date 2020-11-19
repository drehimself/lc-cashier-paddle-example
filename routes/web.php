<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/subscribe', function () {
    $user = auth()->user();

    $payLink = $user->newSubscription('default', $free = 637153)
        ->returnTo(route('dashboard'))
        ->create();

    $paylinkStandard = $user->newSubscription('default', $paylinkStandard = 637149)
        ->returnTo(route('dashboard'))
        ->create();

    return view('subscribe', [
        'payLink' => $payLink,
        'paylinkStandard' => $paylinkStandard,
    ]);
})->name('subscribe');

Route::middleware(['auth:sanctum', 'verified', 'payingCustomer'])->get('/members', function () {
    return view('members');
})->name('members');

Route::middleware(['auth:sanctum', 'verified'])->get('/charge', function () {
    $payLink = auth()->user()->chargeProduct(637164);

    return view('charge', ['payLink' => $payLink]);
})->name('charge');

Route::middleware(['auth:sanctum', 'verified'])->get('/receipts', function () {
    return view('receipts', [
        'receipts' => auth()->user()->receipts,
    ]);
})->name('receipts');

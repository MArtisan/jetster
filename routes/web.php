<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\VideoComponent;
use App\Http\Livewire\PlayerComponent;
use App\Http\Livewire\AdminComponent;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/blog', BlogComponent::class);
Route::get('/', VideoComponent::class);
Route::get('/player', PlayerComponent::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', AdminComponent::class);
});

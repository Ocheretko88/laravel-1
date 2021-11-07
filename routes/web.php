<?php

use Illuminate\Support\Facades\DB;
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
Route::get('/db-test', function() {
    if(DB::connection()->getDatabaseName()){
        echo "connected sucessfully to database " . DB::connection()->getDatabaseName();
    }
});
Route::view('/', 'home');
Route::get('post/create', \App\Http\Livewire\PostCreate::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

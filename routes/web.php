<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
    return view('home', [
    ]);
});

Route::get('test', function () {

    return view('test');
});

Route::get('about', function () {

    return view('about');
});

// Route::get('projects', [ProjectsController::class, 'index'])->name('projects.index');

// Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create');

// Route::post('projects/create', [ProjectsController::class, 'store'])->name('projects.store');

// Route::get('projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');

// Route::get('projects/{id}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');

// Route::put('projects/{id}/edit', [ProjectsController::class, 'update'])->name('projects.update');

Route::resource('projects', ProjectsController::class); //maakt een  lijst van routes
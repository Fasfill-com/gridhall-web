<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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
    return view('pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/case-study', function () {
    return view('pages.case-study');
})->name('case-study');

Route::get('/product/mapx', function () {
    return view('pages.mapx');
})->name('mapx');

Route::get('/product/alleypay', function () {
    return view('pages.alleypay');
})->name('alleypay');

Route::get('/product/fasfill', function () {
    return view('pages.fasfill');
})->name('fasfill');

Route::get('/product/fasfill/privacy', function () {
    return view('pages.privacy-policy');
})->name('fasfill-privacy-policy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Fasfill android Deep link
Route::get('/assetlinks.json', function () {
    $path = public_path('assetlinks.json');

    // Check if the file exists
    if (File::exists($path)) {
        // Return the file as a response
        return Response::file($path);
    } else {
        // If the file doesn't exist, return a 404 error
        abort(404);
    }
});


// Fasfill iOS Deep link
Route::get('/apple-app-site-association', function () {
    $path = public_path('apple-app-site-association.json');

    // Check if the file exists
    if (File::exists($path)) {
        // Return the file as a response
        return Response::file($path);
    } else {
        // If the file doesn't exist, return a 404 error
        abort(404);
    }
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

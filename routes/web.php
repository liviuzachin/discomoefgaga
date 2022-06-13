<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\WorkController;

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

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/events', [EventsController::class, 'events']);
Route::resource('videos', VideosController::class)->only(['index', 'show']);
Route::get('/popular-tracks/{link}', [PageController::class, 'popularTracks'])->name('popular-tracks');
Route::get('/photos', [PhotosController::class, 'photos']);

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'postContact']);

Route::get('/work-with-us', [WorkController::class, 'work']);

Route::get('/upload-photos', [UploadsController::class, 'uploadPhotos'])->name('upload-photos');
Route::post('/upload-photos', [UploadsController::class, 'postUploadPhotos']);

/* Search */
Route::get('/search', [SearchController::class, 'getSearch'])->name('search');

// Subscription to newsletter
Route::post('/subscription-to-newsletter', [SubscriptionController::class, 'postEmail']);
Route::get('/subscription-check-email', [SubscriptionController::class, 'checkEmail']);


// Users Profile
Route::get('/user/{username}', [ProfileController::class, 'user'])->name('user-profile');

// Auth
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/songs', function () {
    //     return view('admin.songs');
    // })->name('admin-songs');
    Route::resource('songs', SongController::class);

    Route::get('/videos', [VideosController::class, 'adminVideos'])->name('admin-videos');
});

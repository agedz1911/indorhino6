<?php

use App\Livewire\HomePage;
use App\Livewire\Pages\Accommodation;
use App\Livewire\Pages\CongressInformation;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\ScientificProgram;
use App\Livewire\Pages\Sponsor;
use App\Livewire\Pages\Submission;
use App\Livewire\Pages\Tour;
use App\Livewire\Pages\Visiting;
use App\Livewire\Resources\Committee;
use App\Livewire\Resources\WelcomeRemarks;
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

Route::get('/', HomePage::class);
Route::get('/welcome-message', WelcomeRemarks::class);
Route::get('/organizing-committee', Committee::class);
Route::get('/sponsor', Sponsor::class)->name('sponsor');
Route::get('/submission', Submission::class);
// Route::get('/registration', Registration::class);

// Route::prefix('/congress-information')->group(function () {
//     Route::get('/', CongressInformation::class);
//     Route::get('#faculties', CongressInformation::class);
// });


// Route::prefix('/scientific-program')->group(function () {
//     Route::get('/', ScientificProgram::class);
//     Route::get('#at-glance', ScientificProgram::class);
//     Route::get('#schedule', ScientificProgram::class);
// });


// Route::prefix('/visiting')->group(function () {
//     Route::get('/', Visiting::class);
//     Route::get('/#lombok', Visiting::class);
//     Route::get('/#venue', Visiting::class);
// });

// Route::get('/accommodation', Accommodation::class);

// Route::get('/social-program', Tour::class)->name('tour');

Route::get('locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

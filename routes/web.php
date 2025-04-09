<?php

use App\Http\Controllers\Api\AtGlanceController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\Index;
use App\Livewire\Dashboard\Profile;
use App\Livewire\Pages\Accommodation;
use App\Livewire\Pages\AtGlance;
use App\Livewire\Pages\Committee;
use App\Livewire\Pages\Faculty;
use App\Livewire\Pages\GuidelineAbstract;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\Schedule;
use App\Livewire\Pages\Topics;
use App\Livewire\Pages\Visiting;
use App\Livewire\Section\Auth;
use App\Livewire\Section\Sponsor;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
// Route::get('/test', function() {
//     return view('pages');
// });
Route::get('/organizing-committee', Committee::class);
Route::get('/program-at-glance', AtGlance::class);
Route::get('/scientific-schedule', Schedule::class);
Route::get('/registration', Registration::class);
Route::get('/submission', GuidelineAbstract::class);
Route::get('/faculties', Faculty::class);
Route::get('/accommodation', Accommodation::class);
Route::get('/sponsors', Sponsor::class);
Route::get('/visiting', Visiting::class);
Route::get('/topics', Topics::class);

Route::middleware('guest')->group(function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', Index::class);
    Route::get('/profile', Profile::class);
});
<?php

use App\Http\Controllers\Api\AtGlanceController;
use App\Livewire\Apras\AtGlance as AprasAtGlance;
use App\Livewire\Apras\Committee as AprasCommittee;
use App\Livewire\Apras\Home;
use App\Livewire\Apras\Visiting as AprasVisiting;
use App\Livewire\Pages\Accommodation;
use App\Livewire\Pages\AtGlance;
use App\Livewire\Pages\Committee;
use App\Livewire\Pages\Faculty;
use App\Livewire\Pages\GuidelineAbstract;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Index;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\Schedule;
use App\Livewire\Pages\SocialProgram;
use App\Livewire\Pages\Topics;
use App\Livewire\Pages\Visiting;
use App\Livewire\Section\Sponsor;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('pages');
});

Route::get('/', Index::class)->name('index');

Route::prefix('inapras')->group(function () {
    Route::get('/home', HomePage::class)->name('home-inapras');
    Route::get('/organizing-committee', Committee::class)->name('organizing-committee-inapras');
    Route::get('/program-at-glance', AtGlance::class)->name('program-at-glance-inapras');
    Route::get('/scientific-schedule', Schedule::class)->name('scientific-schedule-inapras');
    Route::get('/registration', Registration::class)->name('registration-inapras');
    Route::get('/submission', GuidelineAbstract::class)->name('submission-inapras');
    Route::get('/faculties', Faculty::class)->name('faculties-inapras');
    Route::get('/sponsors', Sponsor::class)->name('sponsors-inapras');
    Route::get('/accommodation', Accommodation::class)->name('accommodation-inapras');
    Route::get('/visiting', Visiting::class)->name('visiting-inapras');
    Route::get('/topics', Topics::class)->name('topics-inapras');
    Route::get('/social-program', SocialProgram::class)->name('tour-inapras');
});


Route::prefix('apras')->group(function () {
    Route::get('/home', Home::class)->name('home-apras');
    Route::get('/vising', AprasVisiting::class)->name('visiting-apras');
    Route::get('/organizing-committee', AprasCommittee::class)->name('organizing-committee-apras');
    Route::get('/program-at-glance', AprasAtGlance::class)->name('program-at-glance-apras');
    Route::get('/registration', App\Livewire\Apras\Registration::class)->name('registration-apras');
    Route::get('/accommodation', App\Livewire\Apras\Accommodation::class)->name('accommodation-apras');
    Route::get('/submission', App\Livewire\Apras\Submission::class)->name('submission-apras');
    Route::get('/social-program', SocialProgram::class)->name('tour-apras');
});

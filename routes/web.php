<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PasteventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ContactController;


/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);



// About page
Route::view('about', 'public.about')->name('about-page');

// Contact page
Route::view('contact', 'public.contact')->name('contact-page');


//Events routes
Route::get('/events', [EventController::class, 'index'])->name('event.index');

Route::prefix("events")->group(function () {
    //show specific result
    Route::get("show/{event}", [EventController::class, 'show'])->name('event-show');

   //show create form
   Route::get('/events/create/{category?}', [EventController::class, 'create'])->name('event-create');

    //Store resource
    Route::post('store', [EventController::class, 'store'])->name('event-store')->middleware("auth");

    //this will controll wich page should render/data if events
    Route::get("{page}", [EventController::class, "index"])->name("events-index");

    //Show edit event form
    Route::get("{event}/edit", [EventController::class, "edit"])->name("event-edit-form")->middleware('auth');

    //Perform update
    Route::put("{event}", [EventController::class, 'update'])->name("update-event")->middleware('auth');

    //perform Delete
    Route::delete("{event}", [EventController::class, 'destroy'])->name("delete-event")->middleware('auth');
});

// Past Events Routes
Route::get('/pastevents', [PasteventController::class, 'index'])->name('pastevent.index');

Route::prefix("pastevents")->group(function () {
    // Show specific past event
    Route::get("show/{pastevent}", [PasteventController::class, 'show'])->name('pastevent-show');

    // Show create past event form
    Route::get('/create/{category?}', [PasteventController::class, 'create'])->name('pastevent-create');

    // Store new past event
    Route::post('store', [PasteventController::class, 'store'])->name('pastevent-store')->middleware("auth");

    // Control which page should render data for past events
    Route::get('/pastevents', [PasteventController::class, 'index'])->name('pastevent.index');

    // Show edit form for past event
    Route::get("{pastevent}/edit", [PasteventController::class, "edit"])->name("pastevent-edit-form")->middleware('auth');

    // Perform update
    Route::put("{pastevent}", [PasteventController::class, 'update'])->name("update-pastevent")->middleware('auth');

    // Perform delete
    Route::delete("{pastevent}", [PasteventController::class, 'destroy'])->name("delete-pastevent")->middleware('auth');
});

//gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::middleware('auth')->group(function () {
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
});

//donation routes
Route::get('/donate', [DonationController::class, 'showForm'])->name('donate.form');
Route::post('/donate/mpesa', [DonationController::class, 'processMpesa'])->name('donate.mpesa');
Route::post('/donate/bank', [DonationController::class, 'processBank'])->name('donate.bank');
Route::get('/donations', [DonationController::class, 'index'])->middleware('auth')->name('donations.index');

//stories routes
Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
Route::get('/stories/create', [StoryController::class, 'create'])->name('stories.create');
Route::post('/stories', [StoryController::class, 'store'])->name('stories.store');
Route::get('/stories/{story}', [StoryController::class, 'show'])->name('stories.show');

//volunteer form route
Route::post('/volunteer/send', [VolunteerController::class, 'sendEmail'])->name('volunteer.send');

//contact form route
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');

// Authentication routes
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('authenticate', [UserController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::post('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
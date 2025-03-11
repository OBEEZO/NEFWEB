<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Pastevent;
use App\Models\Event;
use App\Models\Story;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest 4 images from the galleries table
        $galleryImages = Gallery::latest()->take(4)->get();

        // Fetch the latest 3 past events from the pastevents table
        $pastevents = Pastevent::latest()->take(3)->get();

        // Fetch the latest 3 upcoming events from the events table
        $events = Event::latest()->take(3)->get();

        $stories = Story::latest()->take(3)->get(); // Fetch latest 3 stories

        return view('home', compact('galleryImages','pastevents','events','stories'));
    }
}

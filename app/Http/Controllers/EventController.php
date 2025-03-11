<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('q');
    
        // Retrieve all events and apply search if provided
        $events = Event::where(function ($query) use ($searchQuery) {
                if (!empty($searchQuery)) {
                    $query->where('title', 'LIKE', '%' . $searchQuery . '%');
                }
            })
            ->paginate(12); // Paginate with 12 images per page
    
        // Fetch only 2 latest events for the footer
        $footerEvents = Event::latest()->take(2)->get();
    
        return view('events.index', [
            'events' => $events,
            'footerEvents' => $footerEvents, // Pass to the view
            'searchQuery' => $searchQuery
        ]);
    }

    /**
     * Show the form to create a new event.
     */
    public function create()
    {
        return view("events.create");
    }

    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $FormFields = $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            "date" => ["required", "date"],
            'image' => 'mimes:jpeg,bmp,png|max:5128'
        ]);

        // Handle file upload if present
        if ($request->hasFile("image")) {
            $FormFields['image'] = $request->file('image')->store('events', 'public');
        }

        // Create the event
        Event::create($FormFields);

        // Redirect to the event index page with success message
        return redirect()->route('events-index', ['page' => 1])
        ->with('message', 'Event created successfully');
    }

    /**
     * Display a specific event.
     */
    public function show(Event $event)
    {
        return view("events.show", [
            "event" => $event
        ]);
    }

    /**
     * Show the form to edit an existing event.
     */
    public function edit(Event $event)
    {
        return view("events.edit", [
            'event' => $event
        ]);
    }

    /**
     * Update a specific event.
     */
    public function update(Request $request, Event $event)
    {
        // Validate incoming request
        $FormFields = $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            "date" => ["required", "date"],
            'image' => 'mimes:jpeg,bmp,png|max:5128'
        ]);

        // Handle file upload if present
        if ($request->hasFile("image")) {
            $FormFields['image'] = $request->file('image')->store('events', 'public');
        }

        // Update the event
        $event->update($FormFields);

        // Return success message
        return back()->with("success_message", "Event updated successfully");
    }

    /**
     * Remove a specific event from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        // Redirect to event index with success message
        return redirect()->route("events-index")->with("success_message", "Event deleted successfully");
    }
}

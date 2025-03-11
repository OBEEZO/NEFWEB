<?php

namespace App\Http\Controllers;

use App\Models\Pastevent;
use Illuminate\Http\Request;

class PasteventController extends Controller
{
    /**
     * Display a listing of past events.
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('q');
    
        // Fetch past events with search filter
        $pastevents = Pastevent::when($searchQuery, function ($query) use ($searchQuery) {
                return $query->where('title', 'LIKE', '%' . $searchQuery . '%');
            })
            ->paginate(12); // Paginate with 12 images per page
    
        return view('pastevents.index', compact('pastevents', 'searchQuery'));
    }

    /**
     * Show the form to create a new past event.
     */
    public function create()
    {
        return view("pastevents.create");
    }

    /**
     * Store a newly created past event in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $formFields = $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            "date" => ["required", "date"],
            'image' => 'mimes:jpeg,bmp,png|max:5128'
        ]);

        // Handle file upload if present
        if ($request->hasFile("image")) {
            $formFields['image'] = $request->file('image')->store('pastevents', 'public');
        }

        // Create the past event
        Pastevent::create($formFields);

        // Redirect to the past events index page with success message
        return redirect()->route('pastevent.index')->with('message', 'Past Event created successfully');
    }

    /**
     * Display a specific past event.
     */
    public function show(Pastevent $pastevent)
    {
        return view("pastevents.show", compact("pastevent")); // Fixed variable name
    }

    /**
     * Show the form to edit an existing past event.
     */
    public function edit(Pastevent $pastevent)
    {
        return view("pastevents.edit", compact("pastevent")); // Fixed variable name
    }

    /**
     * Update a specific past event.
     */
    public function update(Request $request, Pastevent $pastevent)
    {
        // Validate incoming request
        $formFields = $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            "date" => ["required", "date"],
            'image' => 'mimes:jpeg,bmp,png|max:5128'
        ]);

        // Handle file upload if present
        if ($request->hasFile("image")) {
            $formFields['image'] = $request->file('image')->store('pastevents', 'public');
        }

        // Update the past event
        $pastevent->update($formFields);

        // Return success message
        return back()->with("success_message", "Past Event updated successfully");
    }

    /**
     * Remove a specific past event from storage.
     */
    public function destroy(Pastevent $pastevent)
    {
        $pastevent->delete();

        // Redirect to past event index with success message
        return redirect()->route("pastevent.index")->with("success_message", "Past Event deleted successfully");
    }
}

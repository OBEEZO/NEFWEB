<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    public function create()
    {
        return view('stories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'story' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('stories', 'public');

        Story::create([
            'name' => $request->name,
            'story' => $request->story,
            'image' => $imagePath,
        ]);

        return redirect()->route('stories.index')->with('success', 'Story added successfully!');
    }

    // Show a single story
    public function show($id)
    {
        $story = Story::findOrFail($id);
        return view('stories.show', compact('story'));
    }
}

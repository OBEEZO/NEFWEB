<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    // Display gallery images
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12); // Paginate with 12 images per page
        return view('gallery.index', compact('galleries'));
    }

    // Store uploaded images
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('gallery', 'public'); // Store in storage/app/public/gallery
    
                Gallery::create([
                    'user_id' => Auth::id(), // Store logged-in user ID
                    'image' => $imagePath,
                ]);
            }
        }
    
        return redirect()->route('gallery.index')->with('success', 'Images uploaded successfully.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Event $event)
    {
        $images = $event->images;
        return view('images.index', compact('event', 'images'));
    }

    public function create(Event $event)
    {
        return view('images.create', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        $request->validate([
            'image' => 'required|image',
        ]);
        $imageFile = $request->file('image');
        $destinationPath = public_path('uploads/events');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
        $filename = uniqid().'.'.$imageFile->getClientOriginalExtension();
        $imageFile->move($destinationPath, $filename);
        $event->images()->create(['path' => '/events/' . $filename]);
        return redirect()->route('events.images.index', $event)->with('success', 'Image uploaded!');
    }

    public function destroy(Event $event, Image $image)
    {
        $image->delete();
        return redirect()->route('events.images.index', $event)->with('success', 'Image deleted!');
    }
}

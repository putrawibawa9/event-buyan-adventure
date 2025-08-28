<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        // dd($events);
        return view('front.tour', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
{
    $data = $request->all();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $path = $image->store('events', 'uploads'); 
        // hasilnya: public/uploads/events/namafile.jpg
        $data['image'] = $path;
    }

    Event::create($data);

    return redirect()->route('dashboard')
        ->with('success', 'Event created successfully!');
}


    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
        ]);
        $event->update($validated);
        return redirect()->route('dashboard')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('dashboard')->with('success', 'Event deleted successfully!');
    }
}

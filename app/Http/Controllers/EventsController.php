<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.events', compact('events'));
    }

    public function create()
    {
         return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request['title'];
        $event->description = $request['description']; 

        $image = $request['image'];
        $ext = $image->getClientOriginalExtension();
        $image_name = time().'.'.$ext;
        $image->move(public_path('/image/event/'), $image_name);
        $event->image = $image_name;

        $event->save();

        return redirect('admin/event/events');
    }

    public function show(Event $event)
    {
        
    }


    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        if ($request['image']) {
            unlink(public_path('image\\event\\').$event->image);
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $image_name = time().'.'.$ext;
            $image->move(public_path('/image/event/'), $image_name);
            $event->image = $image_name;
        }

        $event->title = $request['title'];
        $event->description = $request['description'];
        $event->save();
        
        return redirect('admin/event/events');
    }

    public function destroy(Event $event)
    {
        unlink(public_path('image\\event\\').$event->image);
        $event->delete();
    }
}

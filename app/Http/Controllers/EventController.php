<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = response()->json(Event::all());
        return $events;
        redirect()->back();
    }
    public function show($id)
    {
        $events = response()->json(Event::find($id));
        return $events;
        redirect()->back();
    }
    public function destroy($id)
    {
        Event::find($id)->delete();
        redirect()->back();
    }
    public function store(Request $request)
    {
        $event = new Event();
        $event->fill($request->all());
        $event->save();
        redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->fill($request->all());
        $event->save();
        redirect()->back();
    }
}

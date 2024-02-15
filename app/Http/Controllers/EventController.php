<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view("pages.events",compact("events"));
    }

    public function store(Request $req)
    {
        $la =Event::create($req->all());
        session()->flash("success","create event successfully");
        return redirect()->route("events");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view("pages.devices",compact("devices"));
    }

    public function store(Request $req)
    {
        Device::create($req->all());
        session()->flash("success" , "Create Device Successfully");
        return redirect()->route("devices");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DataController extends Controller
{
    public function index()
    {
        $data = data::all();
        return view("pages.data",compact("data"));
    }

    public function store(Request $req)
    {
        data::create($req->all());
    }
}

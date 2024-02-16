<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class APIController extends Controller
{
    public function index()
    {
        $tokens =  auth()->user()->tokens;
        return view("pages.APIsdata",compact("tokens"));
    }

    public function store(Request $req)
    {
        $user = auth()->user();
        $token = $user->createToken($req->token_name."-". $user->name ."-". Carbon::today(),[
            'expires_at' => $req->input("expire_time"),
        ]);
        session()->flash("success", "Create API Successfully token is ".$token->plainTextToken);
        return redirect()->route("apis");
    }
}

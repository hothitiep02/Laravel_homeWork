<?php

namespace App\Http\Controllers;

class vd3Cotroller extends Controller {
    public function index() {
        $hello = "Hello PNV";
        $description = "Welcome to PNV26";
        return view('vd3')->with(['hello'=>$hello, 'description'=>$description]);
    }
}


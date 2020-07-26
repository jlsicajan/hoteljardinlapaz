<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about_us(){
        return view('frontend.about_us');
    }
    public function hotel(){
        return view('frontend.hotel');
    }
    public function services(){
        return view('frontend.services');
    }
    public function contact_us(){
        return view('frontend.contact_us');
    }
    public function rooms(){
        return view('frontend.rooms');
    }
    public function restaurant(){
        return view('frontend.restaurant');
    }
}

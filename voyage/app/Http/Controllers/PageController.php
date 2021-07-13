<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function viaggi()
    {
        $travels = Travel::all();

        return view('viaggi', compact('travels'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    // national
    public function national()
    {
        return view("national");
    }
    // internationalnews
    public function internationalnews()
    {
        return view("internationalnews");
    }

    // country
    public function country()
    {
        return view("country");
    }

    // entertainment
    public function entertainment()
    {
        return view("entertainment");
    }

    // sports
    public function sports()
    {
        return view("sports");
    }
}

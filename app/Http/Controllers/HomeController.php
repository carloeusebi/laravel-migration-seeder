<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('welcome', compact('trains'));
    }
}

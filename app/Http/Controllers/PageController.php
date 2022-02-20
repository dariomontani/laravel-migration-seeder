<?php

namespace App\Http\Controllers;

use App\train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        $trains = Train::all();
        return view('train.index', ['trains' => $trains]);
    }
}

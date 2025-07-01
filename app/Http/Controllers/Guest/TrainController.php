<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::where('partenza', '>', '2025-07-01')->get();

        return view('welcome', compact('trains'));
    }
}

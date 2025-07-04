<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $trains = Train::where('partenza', '>', date('Y-m-d H:i:s'))->get();

        return view('welcome', compact('trains'));
    }
}

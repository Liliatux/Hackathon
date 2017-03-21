<?php

namespace App\Http\Controllers;

use App\Centre;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    public function show() {
    	$centres = Centre::all();
    	return view('meteo', ['centres' => $centres]);
    }
}

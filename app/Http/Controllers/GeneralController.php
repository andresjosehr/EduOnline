<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function Escritorio()
    {
    	return view("escritorio");
    }
}

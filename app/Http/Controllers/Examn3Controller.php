<?php

namespace App\Http\Controllers;
use App\Models\characters;

use Illuminate\Http\Request;

class Examn3Controller extends Controller
{
    public function equals80(){

        $page_title = "ejemplo de PHP";
        $equals = characters::all();


    
    return view('Welcome', compact('page_title', 'equals'));
    }
}

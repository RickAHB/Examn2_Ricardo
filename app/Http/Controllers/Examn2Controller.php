<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\characters;

class Examn2Controller extends Controller
{
    public function above80(){

        $page_title = "ejemplo de PHP";
        $above = characters::all();


        

    return view('Welcome', compact('page_title', 'above'));
    }

}

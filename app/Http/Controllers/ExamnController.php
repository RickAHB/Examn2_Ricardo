<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\characters;

class ExamnController extends Controller
{
    public function all(){

        $page_title = "All Characters";
        $alls = characters::all();


        

    return view('Welcome', compact('page_title', 'alls'));
    }
    



}

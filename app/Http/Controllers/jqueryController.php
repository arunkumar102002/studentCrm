<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jqueryController extends Controller
{
   
    public function jquery()
    {
        return view('jquery.index');
    }

}

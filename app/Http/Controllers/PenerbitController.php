<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerbitController extends Controller
{
     public function index(){
        return view('pages.penerbit');
    }
}

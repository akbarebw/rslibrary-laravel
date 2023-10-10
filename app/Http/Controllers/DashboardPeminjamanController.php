<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPeminjamanController extends Controller
{
     public function index(){
        return view('pages.dashboard-peminjaman');
    }
     public function detail(){
        return view('pages.dashboard-peminjaman-detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardBukuController extends Controller
{
    public function index(){
        return view('pages.dashboard-buku');
    }
    public function detail(){
        return view('pages.dashboard-buku-detail');
    }
    public function create(){
        return view('pages.dashboard-buku-tambah');
    }
}

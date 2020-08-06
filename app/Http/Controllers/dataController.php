<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index() {
        return view('tabel');
    }

    public function dataTable() {
        return view('dataTabel');
    }
}

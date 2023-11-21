<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perumahan;

class PerumahanController extends Controller
{
    public function create(){
        return("form");
    }

    public function index()
    {
        $data_perumahan = perumahan::all();
        $no = 1;
        return view("index", ['data' => $data_perumahan, 'no' => $no]);
    }
}

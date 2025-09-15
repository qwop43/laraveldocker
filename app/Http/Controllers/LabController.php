<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        return view('lab.index');
    }

    public function about()
    {
        return view('lab.about');
    }

    public function status()
    {
        return view('lab.status');
    }

    public function echo()
    {
        return view('lab.echo');
    }
}

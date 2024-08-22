<?php

namespace App\Http\Controllers;

use App\Models\FormatTwo;
use Illuminate\Http\Request;

class FormatTwoController extends Controller
{

    public function index()
    {
        return view('format-two');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FormatTwo $formatTwo)
    {
        //
    }

}

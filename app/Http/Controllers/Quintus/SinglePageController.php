<?php

namespace App\Http\Controllers\Quintus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index()
    {
        return view('quintus.single');
    }
}

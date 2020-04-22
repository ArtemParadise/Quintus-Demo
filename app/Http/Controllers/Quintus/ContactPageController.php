<?php

namespace App\Http\Controllers\Quintus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        return view('quintus.contact');
    }
}

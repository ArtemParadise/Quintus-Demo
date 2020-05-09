<?php

namespace App\Http\Controllers\Quintus;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('active', '=', 1)->orderBy('sliders.updated_at', 'desc')->get();

        return view('quintus.about', ['sliders' => $sliders]);
    }
}

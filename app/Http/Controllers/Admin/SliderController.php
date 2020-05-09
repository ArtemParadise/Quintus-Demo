<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // TODO добавить разделение на активные и неактивные слайдеры

        $sliders = Slider::orderBy('sliders.updated_at', 'desc')->paginate(4) ;

        return view('admin.slider.sliderPanel', compact('sliders'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.createSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();

        $slider->title = $request->title;

        $path = Storage::putFile('public', $request->file('img'));
        $url = Storage::url($path);
        $slider->img = $url;

        if ($request->checkbox) {
            $slider->active = true;
        } else {
            $slider->active = false;
        }

        $slider->save();
        return redirect()->route('sliderPanel')->with('success', 'Slider created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.editSlider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->title = $request->title;

        if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $slider->img = $url;

        }


        if ($request->checkbox) {
            $slider->active = true;
        } else {
            $slider->active = false;
        }

        $slider->update();
//        $id = $slider->id;
        return redirect()->route('editSlider', compact('id'))->with('success', 'Editing have done successfully!');
//        return redirect()->route('sliderPanel')->with('success', "Editing have done successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('sliderPanel');
    }
}

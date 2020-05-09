<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ClientsBrandWall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientsBrandController extends Controller
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
        $brands = ClientsBrandWall::orderBy('updated_at', 'desc')->paginate(5);

        return view('admin.clients.clients_panel', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.createBrandWall');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:clients_brand_walls|max:255',
            'img' => 'required|image',
            'priority' => 'integer|max:10'
        ]);

        $brand = new ClientsBrandWall();

        $brand->title = $request->title;
        $brand->priority = $request->priority;

        $path = Storage::putFile('public', $request->file('img'));
        $url = Storage::url($path);

        $brand->img = $url;

        if( $request->checkbox) {
            $brand->active = true;
        } else {
            $brand->active = false;
        }

        $brand->save();
        return redirect()->route('brandPanel')->with('success', "Client created successfully");
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
        $brand = ClientsBrandWall::find($id);
        return view('admin.clients.editBrandWall', compact('brand'));
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
        $brand = ClientsBrandWall::find($id);

        $request->validate([
            'title' => 'required|max:255',
            'img' => 'image',
            'priority' => 'integer|max:10'
        ]);

        $brand->title = $request->title;
        $brand->priority = $request->priority;

        if( isset($request->file)) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);

            $brand->img = $url;
        }

        if( $request->checkbox) {
            $brand->active = true;
        } else {
            $brand->active = false;
        }

        $brand->update();
        return redirect()->route('editBrand', compact('id'))->with('success', "Client updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = ClientsBrandWall::find($id);
        $brand->delete();
        return redirect()->route('brandPanel');
    }
}

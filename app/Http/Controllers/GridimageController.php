<?php

namespace App\Http\Controllers;

use App\Models\Gridimage;
use Illuminate\Http\Request;

class GridimageController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $gridimages = Gridimage::all();

        return view('gridimage.index', compact('gridimages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gridimage.create');
    }

    /**
     * Store a newly created resource in storage.
     * masuk ke method ini untuk create
     * coba masukan ke database
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Gridimage::create($input);
        
        return redirect('/admin/gridimages')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(gridimage $gridimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gridimage $gridimage)
    {
        return view('gridimage.edit', compact('gridimage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gridimage $gridimage)
    {
        // validasi
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else{
            unset($input['image']);
        }

        $gridimage->update($input);

        return redirect('/admin/gridimages')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gridimage $gridimage)
    {
        $gridimage->delete();
        return redirect('/admin/gridimages')->with('message','Data Berhasil Dihapus');
    }
}

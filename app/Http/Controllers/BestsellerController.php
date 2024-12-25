<?php

namespace App\Http\Controllers;

use App\Models\Bestseller;
use Illuminate\Http\Request;

class BestsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $bestsellers = Bestseller::all();

        return view('bestseller.index', compact('bestsellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bestseller.create');
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
            'product'=> 'required',
            'price'=> 'required|integer',
            'image'=> 'required|image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Bestseller::create($input);
        
        return redirect('/admin/bestsellers')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(bestseller $bestseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bestseller $bestseller)
    {
        return view('bestseller.edit', compact('bestseller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bestseller $bestseller)
    {
        // validasi
        $request->validate([
            'product'=> 'required',
            'price'=> 'required|integer',
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

        $bestseller->update($input);

        return redirect('/admin/bestsellers')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bestseller $bestseller)
    {
        $bestseller->delete();
        return redirect('/admin/bestsellers')->with('message','Data Berhasil Dihapus');
    }
}

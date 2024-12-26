<?php

namespace App\Http\Controllers;

use App\Models\Upcomingevent;
use Illuminate\Http\Request;

class UpcomingeventController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $upcomingevents = Upcomingevent::all();

        return view('upcomingevent.index', compact('upcomingevents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upcomingevent.create');
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
            'date'=> 'required|date',
            'content'=> 'required',
            'short_description'=> 'required',
            'image'=> 'required|image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Upcomingevent::create($input);
        
        return redirect('/admin/upcomingevents')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $upcomingevent = Upcomingevent::findOrFail($id);
        return view('upcomingevent.show', compact('upcomingevent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(upcomingevent $upcomingevent)
    {
        return view('upcomingevent.edit', compact('upcomingevent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, upcomingevent $upcomingevent)
    {
        // validasi
        $request->validate([
            'title'=> 'required',
            'date'=> 'required|date',
            'content'=> 'required',
            'short_description'=> 'required',
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

        $upcomingevent->update($input);
        return redirect('/admin/upcomingevents')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(upcomingevent $upcomingevent)
    {
        $upcomingevent->delete();
        return redirect('/admin/upcomingevents')->with('message','Data Berhasil Dihapus');
    }
}

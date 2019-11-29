<?php

namespace App\Http\Controllers;

use App\Sawah;
use Illuminate\Http\Request;

class SawahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $sawah = \App\Sawah::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $sawah = \App\Sawah::all();
        }
        return view('admin.sawah.index', compact('sawah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sawah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sawah = new \App\Sawah;
        $sawah->nama = $request->get('name');
        $sawah->save();

        return redirect('/sawah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sawah  $sawah
     * @return \Illuminate\Http\Response
     */
    public function show(Sawah $sawah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sawah  $sawah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sawah $sawah)
    {
        return view('admin.sawah.edit')->with('sawah', Sawah::findOrFail($sawah->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sawah  $sawah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sawah $sawah)
    {
        $sawah = \App\Sawah::findOrFail($sawah->id);
        $sawah->nama = $request->get('name');
        $sawah->save();

        return redirect('/sawah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sawah  $sawah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sawah::destroy($id);
        // dd($id);

        return redirect('/sawah');
    }
}

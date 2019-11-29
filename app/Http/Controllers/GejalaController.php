<?php

namespace App\Http\Controllers;

use App\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $gejala = \App\Gejala::where('name', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $gejala = \App\Gejala::all();
        }
        return view('admin.gejala.index',  compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\Gejala;

        $data->name = $request->get('name');
        $data->save();

        return redirect('/gejala');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
        $data = \App\Gejala::findOrFail($gejala->id);

        $data->name = $request->get('name');
        $data->save();

        return redirect('/gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        Gejala::destroy($gejala->id);

        return redirect('/gejala');
    }
}

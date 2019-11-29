<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Sawah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function indexlitbang(Request $request)
    {
        if ($request->has('cari')) {
            $jadwal = \App\Jadwal::where('sawah', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $jadwal = \App\Jadwal::all();
        }

        return view('litbang.jadwal', compact('jadwal'));
    }

    public function indexmandor(Request $request)
    {
        if ($request->has('cari')) {
            $jadwal = \App\Jadwal::where('sawah', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $jadwal = \App\Jadwal::all();
        }

        return view('mandor.jadwal', compact('jadwal'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $jadwal = \App\Jadwal::where('sawah', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $jadwal = \App\Jadwal::all();
        }

        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create')->with('sawah', Sawah::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\Jadwal;
        $data->sawah = $request->get('sawah');
        $data->kegiatan = $request->get('kegiatan');
        $data->tanggal = $request->get('tanggal');
        $data->catatan = $request->get('catatan');
        $data->save();

        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('admin.jadwal.edit', compact('jadwal'))->with('sawah', Sawah::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $data = \App\Jadwal::findOrFail($jadwal->id);
        $data->sawah = $request->get('sawah');
        $data->kegiatan = $request->get('kegiatan');
        $data->tanggal = $request->get('tanggal');
        $data->catatan = $request->get('catatan');
        $data->save();

        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);

        return redirect('/jadwal');
    }
}

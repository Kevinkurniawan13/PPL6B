<?php

namespace App\Http\Controllers;

use App\Gejala;
use App\Jadwal;
use App\Laporan;
use Illuminate\Http\Request;
use App\Sawah;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function laporanlitbang(Request $request)
    {
        if ($request->has('cari')) {
            $laporan = \App\Laporan::where('judul_laporan', 'LIKE', '%' . $request->cari . '%')->get();

            // dd($laporan);
        } else {
            $laporan = \App\Laporan::all();
        }
        return view('litbang.laporan.index', compact('laporan'));
    }

    public function indexadmin(Request $request)
    {

        if ($request->has('cari')) {
            // $data = \App\Laporan::whereIn('user_id', [$user_id])->();
            $laporan = \App\Laporan::where('judul_laporan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $laporan = \App\Laporan::paginate(10);
        }


        return view('mandor.index', compact('laporan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;

        if ($request->has('cari')) {
            // $data = \App\Laporan::whereIn('user_id', [$user_id])->();
            $laporan = \App\Laporan::where('judul_laporan', 'LIKE', '%' . $request->cari . '%')->whereIn('user_id', [$user_id])->get();
        } else {
            $laporan = \App\Laporan::whereIn('user_id', [$user_id])->paginate(10);
        }


        return view('mandor.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mandor.create')->with(['sawah' => Sawah::all(), 'gejalas' => Gejala::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = new \App\Laporan;

        $data->judul_laporan = $request->get('judul_laporan');
        $data->user_id = $user_id;
        $data->umur_tanaman = $request->get('umur_tanaman');
        $data->sawah = $request->get('sawah');
        // $data->status = 'BELUM';
        $foto = $request->file('foto');

        if ($foto) {
            $foto_path = $foto->store('foto', 'public');
            $data->foto = $foto_path;
        }

        $data->save();
        // dd($data);
        $gejalas = $request->get('gejalas');
        // dd($gejalas);
        $data->gejalas()->attach($gejalas);

        return redirect('/laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {

        return view('litbang.laporan.solusi', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $data = \App\Laporan::findOrFail($laporan->id);

        $data->penyakit = $request->get('penyakit');
        $data->solusi = $request->get('solusi');
        $data->status = 'SUDAH';
        $data->save();

        return redirect('/laporanlitbang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}

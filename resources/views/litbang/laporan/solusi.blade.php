@extends('layouts.master')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    @include('layouts.navbar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h4 class="text-center">Form Input Solusi</h4>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <form class="user" action="{{route('laporan.update', $laporan->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        
                        <div class="form-group">
                            <input disabled value="{{implode(', ', $laporan->gejalas()->get()->pluck('name')->toArray())}}" type="text" name="gejala" class="form-control form-control-user @error('gejala') is-invalid @enderror" placeholder="Masukkan Gejala">
                            @error('gejala') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input disabled value="{{$laporan->umur_tanaman}}" type="text" name="umur_tanaman" class="form-control form-control-user @error('umur_tanaman') is-invalid @enderror" id="harga-produk" placeholder="Masukkan Umur Tanaman (Hari)">
                            @error('umur_tanaman') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input disabled value="{{$laporan->sawah}}" type="text" name="sawah" class="form-control form-control-user @error('sawah') is-invalid @enderror" id="harga-produk" placeholder="Masukkan Umur Tanaman (Hari)">
                            @error('sawah') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Foto Sawah</label><br>
                            <img src="{{asset('storage/'. $laporan->foto)}}" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <input value="{{$laporan->penyakit}}" type="text" name="penyakit" class="form-control form-control-user @error('penyakit') is-invalid @enderror" id="harga-produk" placeholder="Diagnosa Penyakit">
                            @error('penyakit') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Solusi</label><br>
                            <textarea class="form-control @error('solusi') is-invalid @enderror" name="solusi" id="" cols="50" rows="4">{{$laporan->solusi}}</textarea>
                            @error('solusi') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <Button type="submit" class="btn btn-primary btn-user">
                            Submit
                        </Button>
                        {{-- <Button name="save_action" value="DRAFT" class="btn btn-success btn-user">
                            Save as draft
                        </Button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
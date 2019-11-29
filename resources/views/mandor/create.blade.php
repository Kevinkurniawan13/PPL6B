@extends('layouts.master')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    @include('layouts.navbar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h3 class="text-center ">Form Laporan Mandor</h3>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <form class="user" action="/laporan" enctype="multipart/form-data" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="judul_laporan" class="form-control form-control-user @error('judul_laporan') is-invalid @enderror" id="harga-produk" placeholder="Masukkan Catatan">
                            </div>
                            <label for="">Pilih Gejala :</label> <br>
                            
                            @foreach ($gejalas as $gejala)
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('gejalas') is-invalid @enderror" type="checkbox" name="gejalas[]" id="gejala" value="{{ $gejala->id}}">
                                    <label class="form-check-label" for="gejalas">{{$gejala->name}}</label>
                                    @error('gejalas') <div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                        <div class="form-group">
                            <input type="text" name="umur_tanaman" class="form-control form-control-user @error('umur_tanaman') is-invalid @enderror" id="harga-produk" placeholder="Masukkan Umur Tanaman (Hari)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Sawah</label>
                            </div>
                            <select name="sawah" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($sawah as $item)
                                
                                <option value="{{$item->nama}}">{{$item->nama}}</option>
                                
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input @error('foto') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">Gambar Tanaman</label>
                                @error('foto') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
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
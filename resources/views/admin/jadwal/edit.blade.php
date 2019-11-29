@extends('layouts.master')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    @include('layouts.navbar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
            <h2 class="text-center">Form Tambah Penjadwalan</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <form class="user" action="/jadwal/{{$jadwal->id}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">{{$jadwal->sawah}}</label>
                                </div>
                                <select name="sawah" class="custom-select" id="inputGroupSelect01">
                                    <option value="" selected>Choose...</option>
                                    
                                    @foreach ($sawah as $item)
                                    
                                    <option value="{{$item->nama}}">{{$item->nama}}</option>
                                    
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="kegiatan" value="{{$jadwal->kegiatan}}" class="form-control form-control-user @error('kegiatan') is-invalid @enderror" placeholder="Masukkan Kegiatan">
                                @error('kegiatan') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <input type="date" name="tanggal" value="{{$jadwal->tanggal}}" class="form-control form-control-user @error('tanggal') is-invalid @enderror" placeholder="Masukkan Tanggal">
                                @error('tanggal') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="catatan" value="{{$jadwal->catatan}}" class="form-control form-control-user @error('catatan') is-invalid @enderror" placeholder="Masukkan Catatan">
                                @error('catatan') <div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        <Button type="submit" class="btn btn-primary btn-user btn-block">
                            Submit
                        </Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
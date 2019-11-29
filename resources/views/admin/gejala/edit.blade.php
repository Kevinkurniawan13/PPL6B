@extends('layouts.master')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    @include('layouts.navbar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
            <h2 class="text-center">Form Edit Gejala</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <form class="user" action="/gejala/{{$gejala->id}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <input value="{{$gejala->nama}}" type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Masukkan Nama">
                            @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
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
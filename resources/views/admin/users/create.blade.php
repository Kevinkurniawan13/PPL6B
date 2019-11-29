@extends('layouts.master')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    @include('layouts.navbar')
    <!-- Begin Page Content -->
    <div class="container-fluid">
            <h2 class="text-center">Form Register Admin</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="p-5">
                    <form class="user" action="/users" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <input value="{{old('name')}}" type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="Masukkan Nama">
                            @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input value="{{old('email')}}" type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="harga-produk" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <input value="{{old('password')}}" type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password">
                        </div>
                        <div class="form-group">
                            <input value="{{old('confirmpassword')}}" type="password" name="confirmpassword" class="form-control form-control-user @error('confirmpassword') is-invalid @enderror" id="confirmpassword" placeholder="Masukkan password">
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
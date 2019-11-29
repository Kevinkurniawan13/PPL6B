@extends('layouts.master')

@section('content')


<div class="container">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">
        
        <div class="col-xl-10 col-lg-12 col-md-9">
            
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">GRETO</h1>
                                </div>
                                <form class="user" action="{{ route('users.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="confirmpassword"class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{route('register')}}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection


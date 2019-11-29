@extends('layouts.master')


@section('content')


<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.sidebar')
        @include('layouts.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <div class="row">
                
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->name}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Email</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->email}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Level</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{implode(', ', $users->roles()->get()->pluck('name')->toArray())}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Created_at</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->created_at}}</div>
                                </div>
                                {{-- <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- End of Main Content -->
    
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection
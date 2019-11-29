@extends('layouts.master')


@section('content')


<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.sidebar')
        @include('layouts.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="card-header py-3">
                    <h4>Dashboard</h4>
            </div>
            
            <!-- Content Row -->
            <div class="row">
                
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sawah</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sawah}}</div>
                                </div>
                                <div class="col-auto">
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
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$laporan}}</div>
                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->hasAnyRole('admin'))
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            
            
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- End of Main Content -->
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan keluar dari sistem dengan menekan tombol logout</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; GRETO 2019</span>
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
@extends('layouts.master')


@section('content')


<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layouts.sidebar')
        @include('layouts.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            @include('layouts.search') <br>
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4>Daftar Laporan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Catatan Laporan</th>
                                    <th>Gejala</th>
                                    <th>Umur Tanaman (hari)</th>
                                    <th>Foto Sawah</th>
                                    <th>Penyakit</th>
                                    <th>Solusi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $item)
                                    
                                <tr>
                                    <td>{{$item->judul_laporan}}</td>
                                    <td>{{implode(', ', $item->gejalas()->get()->pluck('name')->toArray())}}</td>
                                    <td>{{$item->umur_tanaman}}</td>
                                    <td><img width="100" src="{{asset('storage/'. $item->foto)}}" alt=""></td>
                                    <td>{{$item->penyakit}}</td>
                                    <td>{{$item->solusi}}</td>
                                    <td>
                                        @if ($item->status == 'BELUM')
                                            <span class="badge bg-danger text-light">Belum</span>
                                        @else 
                                        <span class="badge bg-success text-light">Sudah</span>
                                        @endif
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{$laporan->links()}} --}}
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
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
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sawah</th>
                                    <th>Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $item)
                                
                                <tr>
                                    <td>{{$item->sawah}}</td>
                                    <td>{{$item->kegiatan}}</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->catatan}}</td>
                                </tr>
                                
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <form class="float-left mr-1" action="/sawah/{{$item->id}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{$jadwal->links()}} --}}
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
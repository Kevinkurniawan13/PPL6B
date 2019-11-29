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
                    <h4>Daftar Gejala</h4>
                </div>
                <div class="card-header py-3">
                    <a href="{{route('gejala.create')}}" class="btn btn-primary btn-sm text-light" >Tambah Gejala</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gejala</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($gejala as $item)
                                
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{ route('gejala.edit', $item->id)}}">
                                            <button type="button" class="btn btn-info btn-sm">Edit</button>
                                        </a>
                                        
                                        <form class="float-left mr-1" action="/gejala/{{$item->id}}" method="POST">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
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
                                                <form class="float-left mr-1" action="/gejala/{{$item->id}}" method="POST">
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
                        {{-- {{$gejala->links()}} --}}
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
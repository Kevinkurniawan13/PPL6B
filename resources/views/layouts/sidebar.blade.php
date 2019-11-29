<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-text mx-3">Greto</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fas fa-columns"></i>
          <span>Dashboard</span></a>
    </li>
    

    <!-- Nav Item - Dashboard -->

    @if (Auth::user()->hasAnyRole('admin'))
    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
          <i class="fa fa-user"></i>
          <span>Manage User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('sawah.index')}}">
          <i class="fa fa-spa"></i>
          <span>Data Sawah</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('jadwal.index')}}">
          <i class="fa fa-calendar"></i>
          <span>Data Penjadwalan</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('gejala.index')}}">
        <i class="fa fa-stethoscope"></i>
        <span>Data Gejala</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/indexadmin')}}">
        <i class="fa fa-copy"></i>
        <span>Laporan</span></a>
  </li>
    
    @endif

    @if (Auth::user()->hasAnyRole('litbang'))
    <li class="nav-item">
        <a class="nav-link" href="{{url('/indexlitbang')}}">
          <i class="fa fa-calendar"></i>
          <span>Penjadwalan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/laporanlitbang')}}">
          <i class="fa fa-copy"></i>
          <span>Laporan Masuk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/pakar')}}">
          <i class="fa fa-paperclip"></i>
          <span>Sistem Pakar</span></a>
    </li>
    @endif

    @if (Auth::user()->hasAnyRole('mandor'))
    <li class="nav-item">
        <a class="nav-link" href="{{route('laporan.create')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kirim Laporan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('laporan.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Laporan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/indexmandor')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data Penjadwalan</span></a>
    </li>
    @endif
    

    
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
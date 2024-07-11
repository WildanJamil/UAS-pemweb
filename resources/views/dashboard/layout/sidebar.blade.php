<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">FasKes</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        <p class="text-danger">{{ Auth::user()->roles->pluck('name')->first()}}</p>;
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    @if(Auth::user()->hasRole('admin'))
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="fas fa-tachometer-alt nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('jenis_faskes.index') }}" class="nav-link">
            <i class="fas fa-hospital nav-icon"></i>
            <p>Jenis Faskes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('provinsi.index') }}"class ="nav-link">
            <i class="fas fa-map-marked-alt nav-icon"></i>
            <p>Provinsi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kabkota.index') }}"class ="nav-link">
            <i class="fas fa-city nav-icon"></i>
            <p>Kabupaten Kota</p>
          </a>
          <li class="nav-item">
            <a href="{{ route('kategori.index') }}"class ="nav-link">
              <i class="fas fa-list-alt nav-icon"></i>
              <p>Kategori</p>
            </a>
          </li>
        </li>
        <li class="nav-item">
          <a href="{{ route('faskes.index') }}" class="nav-link">
            <i class="fas fa-clinic-medical nav-icon"></i>
            <p>Fasilitas Kesehatan</p>
          </a>
        </li>
        @elseif (Auth::user()->hasRole('faskes') )
        <li class="nav-item">
          <a href="{{ route('faskes.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Fasilitas Kesehatan</p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
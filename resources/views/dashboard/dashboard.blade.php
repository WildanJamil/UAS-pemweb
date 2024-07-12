@extends('dashboard.layout.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <x-box caption="Jenis Faskes" total="{{ $jenis_faskes }}" bg="bg-dark" icon="icon-bag" url="jenis_faskes"/>
          <x-box caption="Provinsi" total="{{ $provinsi }}" bg="bg-primary" icon="icon-map" url="provinsi"/>
          <x-box caption="Kabupaten/Kota" total="{{ $kabkota }}" bg="bg-success" icon="icon-building" url="kabkota"/>
          <x-box caption="Kategori" total="{{ $kategori }}" bg="bg-warning" icon="icon-tag" url="kategori"/>
          <x-box caption="Fasilitas Kesehatan" total="{{ $faskes }}" bg="bg-info" icon="icon-hospital" url="faskes"/>
        </div>
        <!-- Main row -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

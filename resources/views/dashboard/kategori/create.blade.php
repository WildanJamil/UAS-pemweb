@extends('dashboard.layout.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Kategori</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Kategori</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
  
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tambah Kategori</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <a href="{{route('kategori.index')}}" class="btn btn-success btn-sm">Kembali</a>

                      <form action="{{route('kategori.store')}}" method="post" >
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-md-4">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control col-md-8" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Tambah" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <!-- /.card-header -->

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>
@endsection
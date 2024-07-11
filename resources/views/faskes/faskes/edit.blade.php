@extends('dashboard.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Fasilitas Kesehatan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('faskes.index') }}" class="btn btn-success btn-sm"><< Kembali</a>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('faskes.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama</label>
                                    <input type="hidden" name="id" value="{{ $faskes->id }}">
                                    <input type="text" name="nama" value="{{ $faskes->nama }}" id="nama" class="form-control col-md-8" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_pengelola" class="col-md-4">Nama Pengelola</label>
                                <input type="text" name="nama_pengelola" id="nama_pengelola" class="form-control col-md-8" value="{{ $faskes->nama_pengelola }}" required>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-4">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{ $faskes->alamat }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-md-4">Website</label>
                                <input type="text" name="website" id="website" value="{{ $faskes->website }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4">Email</label>
                                <input type="email" name="email" id="email" value="{{ $faskes->email }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="kabkota_id" class="col-md-4">Kabupaten/Kota ID</label>
                                <select name="kabkota_id" id="kabkota_id" class="form-control col-md-8">
                                    <option value="" hidden>Pilih kabkota</option>
                                    @foreach ($kabkota as $k)
                                        <option value="{{ $k->id }}" {{ $k->id == $faskes->kabkota_id ? 'selected' : '' }}>{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="rating" class="col-md-4">Rating</label>
                                <input type="number" name="rating" id="rating" value="{{ $faskes->rating }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-md-4">Latitude</label>
                                <input type="text" name="latitude" id="latitude" value="{{ $faskes->latitude }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="longitude" class="col-md-4">Longitude</label>
                                <input type="text" name="longitude" id="longitude" value="{{ $faskes->longitude }}" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_faskes_id" class="col-md-4">Jenis Faskes ID</label>
                                <select name="jenis_faskes_id" id="jenis_faskes_id" class="form-control col-md-8">
                                    <option value="" hidden>Pilih jenis_faskes</option>
                                    @foreach ($jenis_faskes as $j)
                                        <option value="{{ $j->id }}" {{ $j->id == $faskes->jenis_faskes_id ? 'selected' : '' }}>{{ $j->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="kategori_id" class="col-md-4">Kategori ID</label>
                                <select name="kategori_id" id="kategori_id" class="form-control col-md-8">
                                    <option value="" hidden>Pilih kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}" {{ $k->id == $faskes->kategori_id ? 'selected' : '' }}>{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Ubah" class="btn btn-primary">
                            </div>
                            </form>
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

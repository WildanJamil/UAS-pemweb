@extends('dashboard.layout.app')

@section('content')
<div class="content-wrapper" style="min-height: 1302.12px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Kabkota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kabkota</li>
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
                            <a href="{{ route('kabkota.index') }}" class="btn btn-success btn-sm"><< Kembali</a>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('kabkota.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">Nama Kabupaten/Kota</label>
                                    <input type="hidden" name="id" value="{{ $kabkota->id }}">
                                    <input type="text" name="nama" value="{{ $kabkota->nama }}" id="nama" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="latitude" class="col-md-4">Latitude</label>
                                    <input type="text" name="latitude" value="{{ $kabkota->latitude }}" id="latitude" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="longitude" class="col-md-4">Longitude</label>
                                    <input type="text" name="longitude" value="{{ $kabkota->longitude }}" id="longitude" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="provinsi_id" class="col-md-4">Provinsi ID</label>
                                    <select name="provinsi_id" id="provinsi_id" class="form-control col-md-8">
                                        <option value="" hidden>Pilih Provinsi</option>
                                        @foreach ($provinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
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

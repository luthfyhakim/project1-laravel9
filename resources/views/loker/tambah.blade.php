@extends('layouts.main2', [
    'title' => 'Tambah Lowongan Kerja'
])

@section('container')
    <h1><center>Tambah Data Lowongan Pekerjaan</center></h1>
    <br><br>

    <form method="POST" action="/loker/store">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" placeholder="Masukkan ID ...">
            @if($errors -> has('id'))
                <div class="text-danger">
                    {{ $errors -> first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama Pekerjaan</label>
            <input type="text" name="nama_pekerjaan" class="form-control" placeholder="Masukkan Nama Pekerjaan ...">
            @if($errors -> has('nama_pekerjaan'))
                <div class="text-danger">
                    {{ $errors -> first('nama_pekerjaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan ...">
            @if($errors -> has('nama_perusahaan'))
                <div class="text-danger">
                    {{ $errors -> first('nama_perusahaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" placeholder="Masukkan Lokasi ...">
            @if($errors -> has('lokasi'))
                <div class="text-danger">
                    {{ $errors -> first('lokasi') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Gaji</label>
            <input type="text" name="gaji" class="form-control" placeholder="Masukkan Gaji ...">
            @if($errors -> has('gaji'))
                <div class="text-danger">
                    {{ $errors -> first('gaji') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Gambar</label>
            <input type="text" name="gambar" class="form-control" placeholder="Masukkan Gambar / Logo Perusahaan ...">
            @if($errors -> has('gambar'))
                <div class="text-danger">
                    {{ $errors -> first('gambar') }}
                </div>
            @endif
        </div>

        <br>
        <div class="form-group">
            <a href="/loker" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection

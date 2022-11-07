@extends('layouts.main2', [
    'title' => 'Edit Siswa'
])

@section('container')
    <h1><center>Halaman Edit Siswa</center></h1>
    <br><br>

    <form method="POST" action="/loker/update/{{ $data->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" value="{{ $data->id }}">
            @if ($errors -> has('id'))
                <div class="text-danger">
                    {{ $errors->first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama Pekerjaan</label>
            <input type="text" name="nama_pekerjaan" class="form-control" value="{{ $data->nama_pekerjaan }}">
            @if ($errors -> has('nama_pekerjaan'))
                <div class="text-danger">
                    {{ $errors->first('nama_pekerjaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" value="{{ $data->nama_perusahaan }}">
            @if ($errors -> has('nama_perusahaan'))
                <div class="text-danger">
                    {{ $errors->first('nama_perusahaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $data->lokasi }}">
            @if ($errors -> has('lokasi'))
                <div class="text-danger">
                    {{ $errors->first('lokasi') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Gaji</label>
            <input type="text" name="gaji" class="form-control" value="{{ $data->gaji }}">
            @if ($errors -> has('gaji'))
                <div class="text-danger">
                    {{ $errors->first('gaji') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Gambar</label>
            <input type="text" name="gambar" class="form-control" value="{{ $data->gambar }}">
            @if ($errors -> has('gambar'))
                <div class="text-danger">
                    {{ $errors->first('gambar') }}
                </div>
            @endif
        </div>

        <br>
        <div class="form-group">
            <a href="/loker/show/{{ $data->id }}" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection

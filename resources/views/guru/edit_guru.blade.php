@extends('layouts.main2', [
    'title' => 'Edit Guru'
])

@section('container')
    <h1><center>Halaman Edit Guru</center></h1>
    <br><br>

    <form method="POST" action="/guru/update/{{ $guru->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="">Nis</label>
            <input type="text" name="id" class="form-control" value="{{ $guru->id }}">
            @if ($errors -> has('id'))
                <div class="text-danger">
                    {{ $errors->first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $guru->Nama }}">
            @if ($errors -> has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $guru->Jenis_kelamin }}">
            @if ($errors -> has('jenis_kelamin'))
                <div class="text-danger">
                    {{ $errors->first('jenis_kelamin') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $guru->Alamat }}">
            @if ($errors -> has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Mapel</label>
            <input type="text" name="mapel" class="form-control" value="{{ $guru->Mapel }}">
            @if ($errors -> has('mapel'))
                <div class="text-danger">
                    {{ $errors->first('mapel') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Foto</label>
            <input type="text" name="foto" class="form-control" value="{{ $guru->Foto }}">
            @if ($errors -> has('foto'))
                <div class="text-danger">
                    {{ $errors->first('foto') }}
                </div>
            @endif
        </div>

        <br>
        <div class="form-group">
            <a href="/guru" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection

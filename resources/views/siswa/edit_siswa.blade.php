@extends('layouts.main2', [
    'title' => 'Edit Siswa'
])

@section('container')
    <h1><center>Halaman Edit Siswa</center></h1>
    <br><br>

    <form method="POST" action="/siswa/update/{{ $siswa->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="">Nis</label>
            <input type="text" name="id" class="form-control" value="{{ $siswa->id }}">
            @if ($errors -> has('id'))
                <div class="text-danger">
                    {{ $errors->first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->Nama }}">
            @if ($errors -> has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $siswa->Kelas }}">
            @if ($errors -> has('kelas'))
                <div class="text-danger">
                    {{ $errors->first('kelas') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $siswa->Jenis_kelamin }}">
            @if ($errors -> has('jenis_kelamin'))
                <div class="text-danger">
                    {{ $errors->first('jenis_kelamin') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $siswa->Alamat }}">
            @if ($errors -> has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Foto</label>
            <input type="text" name="foto" class="form-control" value="{{ $siswa->Foto }}">
            @if ($errors -> has('foto'))
                <div class="text-danger">
                    {{ $errors->first('foto') }}
                </div>
            @endif
        </div>

        <br>
        <div class="form-group">
            <a href="/siswa" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection

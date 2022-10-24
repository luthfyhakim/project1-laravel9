@extends('layouts.main2', [
    'title' => 'Tambah Guru',
])

@section('container')
    <h1>
        <center>Tambah Data Guru RPL</center>
    </h1>
    <br><br>

    <form method="POST" action="/guru/store" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">Nip</label>
            <input type="text" name="id" class="form-control" placeholder="Masukkan Nip ...">
            @if ($errors->has('id'))
                <div class="text-danger">
                    {{ $errors->first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Guru ...">
            @if ($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin ...">
            @if ($errors->has('jenis_kelamin'))
                <div class="text-danger">
                    {{ $errors->first('jenis_kelamin') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat ...">
            @if ($errors->has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="">Mapel</label>
            <input type="text" name="mapel" class="form-control" placeholder="Masukkan Mapel ...">
            @if ($errors->has('mapel'))
                <div class="text-danger">
                    {{ $errors->first('mapel') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto" class="form-control" placeholder="Ketikkan misal male.jpg ...">
            @if ($errors->has('foto'))
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

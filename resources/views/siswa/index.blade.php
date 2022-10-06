@extends('layouts.main2', [
    'title' => 'Data Siswa'
])

@section('container')
    <h1>Data Siswa RPL</h1>
    <div class="card-body">
        <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
        <br><br>

        <table class="table table-bordered table-hover table-striped">
            <thead align="center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th> <th>Alamat</th>
                    <th>Foto Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->Nama }}</td>
                        <td>{{ $s->Kelas }}</td>
                        <td>{{ $s->Jenis_kelamin }}</td>
                        <td>{{ $s->Alamat }}</td>
                        <td><img src="{{ url('img/' . $s->Foto) }}" alt="foto siswa" width="100px"></td>
                        <td>
                            <a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                            <a href="/siswa/hapus/{{ $s->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

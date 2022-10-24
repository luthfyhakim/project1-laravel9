@extends('layouts.main2', [
    'title' => 'Data Guru'
])

@section('container')
    <h1>Data Guru</h1>
    <div class="card-body">
        <a href="{{ route('guru.create') }}" class="btn btn-primary">Input Guru Baru</a>
        <br><br>

        <table class="table table-bordered table-hover table-striped">
            <thead align="center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Mapel</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $g)
                    <tr>
                        <td>{{ $g->id }}</td>
                        <td>{{ $g->Nama }}</td>
                        <td>{{ $g->Jenis_kelamin }}</td>
                        <td>{{ $g->Alamat }}</td>
                        <td>{{ $g->Mapel }}</td>
                        <td><img src="{{ url('img/' . $g->Foto) }}" alt="foto guru" width="100px"></td>
                        <td>
                            <a href="{{ url('/guru/edit/' . $g->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/guru/delete/' . $g->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

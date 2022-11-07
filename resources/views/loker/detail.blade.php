@extends('layouts.main2', [
    'title' => 'Detail Lowongan Kerja'
])
@section('container')
    <h1 class="text-center">Detail Lowongan</h1>

    <div class="mt-5">
        <h3>{{ $data->nama_pekerjaan }}</h3>
        <div class="row">
            <div class="col-md-1">
                <img src="{{ url('img/'. $data->gambar) }}" class="img-fluid rounded-start" alt="loker">
            </div>
            <div class="col-md-11 my-auto">
                <h5>{{ $data->nama_perusahaan }}</h5>
                <p class="text-secondary"><i class="fa-solid fa-location-dot"></i> {{ $data->lokasi }}</p>
                <p>Rp. {{ number_format($data->gaji, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="mt-3">
            <h5>Jobdesk</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam eum eveniet quibusdam. Sequi, vero id debitis quo quaerat sint ut magni neque, voluptatum aliquam, sit suscipit optio maxime maiores! Corporis molestiae cumque voluptatem commodi nulla itaque quaerat amet officiis. Incidunt et est saepe enim accusantium facilis. Quidem ut dolores optio.</p>
        </div>
        <div class="mt-3">
            <h5>Penempatan Kerja</h5>
            <p>WFO / WFH</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 tombol-kiri">
            <a href="/loker" class="btn btn-warning my-3">Kembali</a>
            <a href="" class="btn btn-success my-3">Lamar Sekarang</a>
        </div>
        <div class="col-md-6 tombol-kanan text-end">
            <a href="/loker/edit/{{ $data->id }}" class="btn btn-primary my-3">Edit</a>
            <a href="/loker/delete/{{ $data->id }}" class="btn btn-danger my-3">Delete</a>
        </div>
    </div>
@endsection

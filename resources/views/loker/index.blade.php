@extends('layouts.main2', [
    'title' => 'Lowongan Kerja',
])
@section('container')
    <h1>Halaman Loker</h1>

    <a href="/loker/create" class="btn btn-primary">Input Loker</a>
    <br><br>

    <div class="row">
        @foreach ($loker as $l)
            <div class="col-md-6">
                <div class="card card-fluid mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 my-auto">
                            <img src="{{ url('img/' . $l->gambar) }}" class="ms-2 img-fluid rounded-start" alt="loker">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a class="card-title fs-3 text-reset"
                                    href="/loker/show/{{ $l->id }}">{{ $l->nama_pekerjaan }}</a>
                                <p class="card-text">{{ $l->nama_perusahaan }}</p>
                                <p class="card-text">{{ $l->lokasi }}</p>
                                <p class="card-text">Rp. {{ number_format($l->gaji, 0, ',', '.') }}</p>
                                <p class="card-text"><small class="text-muted">{{ $l->updated_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

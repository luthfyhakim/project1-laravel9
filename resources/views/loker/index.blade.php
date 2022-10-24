@extends('layouts.main2', [
    'title' => 'Lowongan Kerja',
])
@section('container')
    <h1>Halaman Loker</h1>

    @foreach ($loker as $l)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('img/'. $l->gambar) }}" class="img-fluid rounded-start" alt="loker">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $l->nama_pekerjaan }}</h5>
                        <p class="card-text">{{ $l->nama_perusahaan }}</p>
                        <p class="card-text">{{ $l->lokasi }}</p>
                        <p class="card-text">Rp. {{ $l->gaji }}</p>
                        <p class="card-text"><small class="text-muted">{{ $l->updated_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

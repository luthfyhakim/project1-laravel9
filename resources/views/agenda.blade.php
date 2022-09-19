@extends('layouts.main')
@section('container')
    <div class="text-center mb-7">
        <h1>Agenda Sekolah</h1>
        <h6>SMK Negeri 2 Trenggalek</h6>
    </div>

    {{-- card agenda --}}
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-7">
        <div class="col">
            <div class="card h-100">
                <img src="/img/logo.png" class="card-img-top" alt="Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Kegiatan 1</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, dolorum.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/img/logo.png" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Kegiatan 2</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, in.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/img/logo.png" class="card-img-top"
                    alt="Palm Springs Road" />
                <div class="card-body">
                    <h5 class="card-title">Kegiatan 3</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, quia.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/img/logo.png" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Kegiatan 4</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, cupiditate.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
@endsection

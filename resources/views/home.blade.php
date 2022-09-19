@extends('layouts.main')
@section('container')
    <div class="text-center">
        <h1>Halaman {{ $title }}</h1>
    </div>

    <div class="regular-page-area section-padding-100 mt-5 mb-4">
        <div class="col-lg-9 mx-auto">
            <div class="card">
                <div class="card-header">Smk Negeri 2 Trenggalek</div>
                <div class="card-body">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if ($blog > 0)
        <div class="text-center pt-5 mb-5">
            <h3>Blog Terbaru</h3>
        </div>

        @foreach ($blog as $b)
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                <div class="col-4">
                    <div class="card h-100">
                        <img src="/img/logo.png" class="card-img-top" alt="rpl" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $b['title'] }}</h5>
                            <p class="card-text">{{ $b['body'] }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

@extends('layouts.main2', [
    'title' => 'Dashboard'
])

@section('container')
    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
@endsection

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <h2>Dashboard</h2>
    <p>Selamat datang, <strong>{{ $username }}</strong>! 👋</p>
    <p>Ini aplikasi sederhana untuk mengelola menu kantin kampus.</p>
</div>
@endsection
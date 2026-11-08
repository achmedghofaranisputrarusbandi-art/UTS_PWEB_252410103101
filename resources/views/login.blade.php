@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="card">
    <h2>Login</h2>

    @if($errors->any())
        <p class="error">Username tidak boleh kosong!</p>
    @endif

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Masukkan username">
        <input type="password" name="password" placeholder="Password (bebas)">
        <button type="submit">Masuk</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="card">
    <h2>Pengelolaan Menu</h2>
    <p>Login sebagai: <strong>{{ $username }}</strong></p>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach($menus as $menu)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $menu['nama'] }}</td>
            <td>Rp {{ number_format($menu['harga'], 0, ',', '.') }}</td>
            <td>{{ $menu['stok'] }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
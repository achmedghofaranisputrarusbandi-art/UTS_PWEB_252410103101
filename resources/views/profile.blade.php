@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="card">
    <h2>Profile</h2>
    <p>Username: <strong>{{ $username }}</strong></p>

    <table>
        @foreach($info as $label => $isi)
        <tr>
            <th>{{ $label }}</th>
            <td>{{ $isi }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
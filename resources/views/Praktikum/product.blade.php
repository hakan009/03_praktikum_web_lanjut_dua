@extends('layouts.app')
@section('title', 'Product')
@section('content')

    <table class="table table-striped">
        <h2 style="text-align: center;">Tabel Product</h2>
        <br>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        @foreach($data_product as $p)
    <tr>
        <td>{{$p['id']}}</td>
        <td>{{$p['nama']}}</td>
        <td>{{$p['status']}}</td>
    </tr>
    @endforeach
    </table>

@endsection
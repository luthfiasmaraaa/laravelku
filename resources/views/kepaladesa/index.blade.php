@extends('layout.main')

@section('title','Perangkat Desa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Data Perangkat Desa</h1>
            <table class="table">
                <thead class="table-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Gaji</th>
                <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($perangkat as $pd)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pd->nama }}</td>
                    <td>{{ $pd->jabatan }}</td>
                    <td>{{ $pd->gaji }}</td>
                    <td>
                    <a href="" class="badge bg-success">edit</a>
                    <a href="" class="badge bg-danger">delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
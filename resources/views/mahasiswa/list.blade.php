@extends('layout')

@section('content')
    <div class="container">
        <div class="d-flex">
            <h4>List data mahasiswa</h4>
            <div class="ms-auto">
                <a class="btn btn-sm btn-success" href="{{ route('mahasiswa.create') }}">Tambah Siswa</a>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
            @foreach($mahasiswa as $no=>$data)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prody }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->phone_number }}</td>
                <td>
                    <div class="d-flex gap-1 d-flex align-items-center">
                        <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-sm btn btn-warning d-flex align-items-center">
                            <img src="{{ asset('img/edit.svg')}}" alt="edit" height="18" width="18">
                        </a>
                        <form action="{{ route('mahasiswa.delete', $data->id) }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger d-flex align-items-center">
                                <img src="{{ asset('img/trush.svg')}}" alt="delete" height="18" width="18">
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
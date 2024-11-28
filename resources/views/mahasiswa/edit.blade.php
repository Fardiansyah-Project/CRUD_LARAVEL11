@extends('layout')

@section('content')
    <div class="container">
            <div class="d-flex">
                <h4>Edit Data Mahasiswa</h4>
                <div class="ms-auto">
                    <a class="btn btn-success" href="{{ route('mahasiswa.list') }}">Kembali</a>
                </div>
            </div>
        </div>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
            @csrf
            <label for="name">Nama</label>
            <input type="text" name="name" value="{{ $mahasiswa->name }}" id="name" class="form-control">
            <label for="nim">NIM</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" id="nim" class="form-control">
            <label for="prody">Jurusan</label>
            <input type="text" name="prody" value="{{ $mahasiswa->prody }}" id="prody" class="form-control">
            <label for="age">Umur</label>
            <input type="number" name="age" value="{{ $mahasiswa->age }}" id="age" class="form-control">
            <label for="address">Alamat</label>
            <input type="text" name="address" value="{{ $mahasiswa->address }}" id="address" class="form-control">
            <label for="phone_number">Nomor Telepon</label>
            <input type="number" name="phone_number" value="{{ $mahasiswa->phone_number }}" id="phone_number" class="form-control">

            <button class="btn btn-primary mt-3">Kirim</button>
        </form>
    </div>
@endsection
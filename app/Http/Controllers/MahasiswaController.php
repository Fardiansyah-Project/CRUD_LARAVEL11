<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function list() {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.list', compact('mahasiswa'));
    }

    function create() {
        return view('mahasiswa.create');
    }

    function input(Request $request) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->prody = $request->prody;
        $mahasiswa->age = $request->age;
        $mahasiswa->address = $request->address;
        $mahasiswa->phone_number = $request->phone_number;
        $mahasiswa->save();
        Alert("Berhasil menambahkan data");
        return redirect()->route('mahasiswa.list');
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->prody = $request->prody;
        $mahasiswa->age = $request->age;
        $mahasiswa->address = $request->address;
        $mahasiswa->phone_number = $request->phone_number;
        $mahasiswa->update();
        Alert("Berhasil mengubah data");
        return redirect()->route('mahasiswa.list');
    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.list');
    }
}

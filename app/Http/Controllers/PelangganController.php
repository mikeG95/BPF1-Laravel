<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'birthday'   => 'nullable|date',
            'gender'     => 'nullable|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'nullable|string|max:20',
        ]);

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'birthday'   => 'nullable|date',
            'gender'     => 'nullable|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'nullable|string|max:20',
        ]);

        $pelanggan->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diupdate');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}

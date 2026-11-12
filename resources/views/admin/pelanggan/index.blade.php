@extends('layouts.admin.app')

@section('title', 'Data Pelanggan')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Data Pelanggan</h1>
        </div>
        <div>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0">No</th>
                        <th class="border-0">Nama</th>
                        <th class="border-0">Birthday</th>
                        <th class="border-0">Gender</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Phone</th>
                        <th class="border-0">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataPelanggan as $pelanggan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pelanggan->first_name }} {{ $pelanggan->last_name }}</td>
                            <td>{{ $pelanggan->birthday }}</td>
                            <td>{{ $pelanggan->gender }}</td>
                            <td>{{ $pelanggan->email }}</td>
                            <td>{{ $pelanggan->phone }}</td>
                            <td>
                                <a href="{{ route('pelanggan.edit', $pelanggan->pelanggan_id) }}"
                                   class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $pelanggan->pelanggan_id) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data pelanggan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

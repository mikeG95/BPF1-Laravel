@extends('layouts.admin.app')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="py-4">
    <h1 class="h4">Edit Pelanggan</h1>
</div>

{{-- Pesan sukses --}}
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button type="button" class="btn-close"
            data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- Pesan error --}}
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('error') }}

        <button type="button" class="btn-close"
            data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- Pesan validasi --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terdapat kesalahan input!</strong>

        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <form action="{{ route('pelanggan.update', $pelanggan->pelanggan_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control"
                           value="{{ old('first_name', $pelanggan->first_name) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control"
                           value="{{ old('last_name', $pelanggan->last_name) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control"
                           value="{{ old('birthday', $pelanggan->birthday) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select">
                        <option value="Male" {{ old('gender', $pelanggan->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $pelanggan->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email', $pelanggan->email) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone', $pelanggan->phone) }}">
                </div>
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection

@extends('layouts.admin.app')

@section('title', 'Edit User')

@section('content')
<div class="py-4">
    <h1 class="h4">Edit User</h1>
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
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Password <small class="text-muted">(kosongkan jika tidak diubah)</small></label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection

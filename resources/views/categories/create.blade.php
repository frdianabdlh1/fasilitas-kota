@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Tambah Kategori</h2>

    <form action="{{ route('categories.store') }}"
          method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input type="text" name="name"
                   value="{{ old('name') }}"
                   class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description"
                      class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
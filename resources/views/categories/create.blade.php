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
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description"
                      class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Edit Kategori</h2>

    <form action="{{ route('categories.update', $category->id) }}"
          method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <input type="text" name="name"
                   value="{{ old('name', $category->name) }}"
                   class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description"
                      class="form-control @error('description') is-invalid @enderror">
                      {{ old('description', $category->description) }}</textarea>

            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Kategori</h2>
        <a href="{{ route('categories.create') }}"
           class="btn btn-primary">Tambah Kategori</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.show', $category->id) }}"
                       class="btn btn-info btn-sm">Detail</a>

                    <a href="{{ route('categories.edit', $category->id) }}"
                       class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('categories.destroy', $category->id) }}"
                          method="POST" class="d-inline"
                          onsubmit="return confirm('Hapus kategori ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Kategori</h2>
        <a href="{{ route('categories.create') }}"
           class="btn btn-primary">Tambah Kategori</a>
    </div>

    {{-- Flash message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form pencarian --}}
    <form method="GET" action="{{ route('categories.index') }}"
          class="row g-2 mb-3">
        <div class="col-md-8">
            <input type="text" name="q"
                   value="{{ request('q') }}"
                   class="form-control"
                   placeholder="Cari kategori...">
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary">Cari</button>
            <a href="{{ route('categories.index') }}"
               class="btn btn-secondary">Reset</a>
        </div>
    </form>

    @if ($search)
        <div class="alert alert-info">
            Hasil pencarian: {{ $categories->total() }} kategori.
        </div>
    @endif

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
                {{-- Nomor tetap berlanjut di halaman 2, 3, dst. --}}
                <td>{{ $categories->firstItem() + $loop->index }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('categories.show', $category->id) }}"
                           class="btn btn-info btn-sm">Detail</a>

                        <a href="{{ route('categories.edit', $category->id) }}"
                           class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Tidak ada data kategori.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $categories->links() }}
    </div>
</div>
@endsection
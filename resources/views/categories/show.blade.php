@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Detail Kategori</h2>

    <div class="card">
        <div class="card-body">
            <h5>{{ $category->name }}</h5>
            <p>{{ $category->description ?? '-' }}</p>
            <p class="text-muted mb-0">
                Dibuat: {{ $category->created_at }}
            </p>
        </div>
    </div>

    <a href="{{ route('categories.index') }}"
       class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
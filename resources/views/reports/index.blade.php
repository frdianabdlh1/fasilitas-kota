<!-- @extend('layout.app')
@section('title', 'Data Laporan')

@section('content')
<h1 class="h4 mb-3">Data Laporan Fasilitas Kota</h1>
<div class="card shadow-sm">
    <div class="card-body">
        <p class="mb-0">Data Laporan akan terhubung ke database pada pertemuan berikutnya.</p>
    </div>
</div>
@endsection -->
<h1 class="h4 mb-3">{{ $judul }}</h1>
<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>NO</th>
            <th>Fasilitas</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($laporan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['fasilitas'] }}</td>
            <td>{{ $item['status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table> 
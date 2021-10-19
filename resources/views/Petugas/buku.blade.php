@extends('layouts.dashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">List Book</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button onclick="location.href='{{ url('buku/tambahbuku') }}'" type="button" class="btn btn-sm btn-outline-secondary">Tambah Buku</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ISBN</th>
            <th scope="col">Judul</th>
            <th scope="col">Stok</th>
            <th scope="col">Tersedia</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($allBuku as $buku)
          <tr>
            <td>{{ $buku->idbuku}}</td>
            <td>{{ $buku->isbn }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->stok }}</td>
            <td>{{ $buku->stok_tersedia }}</td>
            <td>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</main>
@endsection

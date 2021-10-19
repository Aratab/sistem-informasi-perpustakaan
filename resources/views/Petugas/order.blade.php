@extends('layouts.dashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Order Peminjaman</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
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
            <th scope="col">ID</th>
            <th scope="col">Nim</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Total Denda</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($allPeminjaman as $peminjaman)
          <tr>
            <td>{{ $peminjaman->idtransaksi }}</td>
            <td>{{ $peminjaman->nim }}</td>
            <td>{{ $peminjaman->tgl_pinjam }}</td>
            <td>{{ $peminjaman->total_denda }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</main>
@endsection

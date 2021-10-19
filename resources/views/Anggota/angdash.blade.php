@extends('layouts.anggota')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">List Book</h1>
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
    <table>
    <div class="row">
      @foreach ($allBuku as $buku)
      <div class="col-md-2">
        <div class="card mb-2 shadow-sm">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 100%; width: 100%; display: block;" src="/img/{{ $buku->file_gambar }}" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text"><b>Stok tersedia: {{ $buku->stok_tersedia }}</b></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Pinjam</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </table>
</main>
@endsection

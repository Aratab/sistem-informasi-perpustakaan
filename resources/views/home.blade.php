@extends('layouts.main')

@section('container')
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
                {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Pinjam</button>
              </div>
              {{-- <small class="text-muted">9 mins</small> --}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div> 

  </table>
@endsection
@extends('layouts.dashboard')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Pelanggan</h1>
    </div>

          <div class="card">
            <div class="card-header"><h4 class="card-title">Masukkan Data Pelanggan</h4></div>
            <div class="card-body">
              <div class="col-lg-12">
                <form method="POST" autocomplete="on" action="">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="nim">NIM:</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat" row = "5"></textarea>
                      </div>
                      <br>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="kota">Kota:</label>
                        <input type="text" class="form-control" id="kota" name="kota">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="no_telp">No Telp:</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp">
                      </div>
                      <br>
                  </div>
                  </div>
                  <br>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="/dashboard/customer" class="btn btn secondary">Cancel</a>
                  </div>
                  </table>
              </form>
                
              </div>
            </div>
          </div>
    
    
    
    
    {{-- <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($allAnggota as $anggota)
          <tr>
            <td>{{ $anggota->nim}}</td>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->alamat }}</td>
            <td>{{ $anggota->kota }}</td>
            <td>{{ $anggota->no_telp }}</td>
            <td>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> --}}
</main>
@endsection
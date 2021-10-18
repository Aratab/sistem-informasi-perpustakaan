@extends('layouts.main')

<?php
if (isset($_POST['submit'])) {

}
?>

@section('container')

<div class="mx-auto card col-4">
  <h4 class="card-header">Login</h4>
  <div class="card-body">
    <form method="POST" autocomplete="on">
      <div class="row mb-2">
        <label for="username" class="col-sm-4 col-form-label">NIM/ID</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
      </div>
      <div class="row mb-2">
        <label for="password" class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-7">
          <input type="password" class="form-control" id="password" name="username" required>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary" id="submit" name="submit">Login</button>
    </form>
  </div>

</div>

@endsection
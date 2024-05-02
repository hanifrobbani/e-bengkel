@extends('navbar')

@section('container')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  <div class="container-fluid bg-white mt-4 rounded">
    <div class="row justify-content-center px-2">
      <form action="/dashboard/jenis" method="post">
        @csrf
        <h2>Tambah Jenis SparePart</h2>
        <div class="form-group  mt-4 mb-3">
          <label for="form2Example1">Id Jenis</label>
          <input type="text" id="form2Example1" class="form-control @error('id') is-invalid @enderror" name="id" required value="{{ old('id')}}" />
          @error('id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group ">
          <label for="form2Example2">Jenis SparePart</label>
          <input type="text" id="form2Example2" class="form-control @error('nama_jenis') is-invalid @enderror" name="nama_jenis" required value="{{ old('nama_jenis')}}" />
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Submit button -->
        <div class="form-group">
          <button type="submit" class="btn btn-primary mt-4 px-3 py-2 me-1">Create</button>
          <a href="/dashboard/jenis"><button type="button" class="btn btn-danger mt-4 px-3 py-2">Cancel</button></a>
        </div>

      </form>
    </div>
  </div>

</main>
@endsection
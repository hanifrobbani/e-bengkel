@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  <h2 class="mb-4">Data Jenis Barang</h2>
  <div align="right">
    <a href="/dashboard/jenis/show" class="btn btn-success btn-sm" role="button" aria-disabled="true">
      <span class="" style="font-size:16px"> Print Data</span> </a>
    <a href="/dashboard/jenis/create" class="btn btn-success btn-sm">
      <span class="" style="font-size:16px">Tambah</span></a>
  </div>

  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">id jenis</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col" class="text-center">Delete</th>
        <th scope="col" class="text-center">Update</th>

      </tr>
    </thead>

    @foreach($jenis as $jeniss)
    <tbody>
      <tr>
        <th scope="row">{{ $loop->iteration}}</th>
        <td>{{ $jeniss->id}}</td>
        <td>{{ $jeniss->nama_jenis }}</td>
        <form action="/dashboard/jenis/{{ $jeniss->id}}" method="post" id="deleteForm">
          @method('delete')
          @csrf
          <td class="text-center"><button type="submit" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal" class="btn btn-link m-0 p-0"><i class="bi bi-trash3 text-danger"></i></button></td>
        </form>
        <td class="text-center"><a href="/dashboard/jenis/{{ $jeniss->id }}/edit"><i class="bi bi-pencil-fill text-primary"></i></a></td>
      </tr>
    </tbody>
    @endforeach

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3">
      <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Buat Data User Baru">
        <a href="/dashboard/setting/create" class="btn btn-primary btn-lg py-3 px-3">
          <i class="bi bi-plus d-flex justify-content-center align-items-center fs-2 fw-bold"></i>
        </a>
      </span>
    </div>
</main>

<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Penghapusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus jenis ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
      </div>
    </div>
  </div>
  <script>
    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
      document.getElementById('deleteForm').submit();

    });

  </script>
</div>
@endsection
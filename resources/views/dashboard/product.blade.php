<style>
    @media only screen and (max-width: 780px) {
        .card-body {
            margin-left: 0 !important;
        }

        #cari-data,
        #btn-cari {
            display: none;
        }

    }
</style>

@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    @if(session()->has('success'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast toast-xl bg-body-tertiary" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-body-secondary">
                <strong class="me-auto text-success fw-bold">Success!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body fs-6">
                {{ session('success') }}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let toast = new bootstrap.Toast(document.querySelector('.toast'));
            toast.show();
        });
    </script>
    @endif

    <nav class="navbar">
        <div class="container-sm p-0 mt-2 justify-content-center">
            <form class="d-flex" role="search" action="{{ url('/dashboard/product') }}">
                <input class="form-control me-2" type="search" name="search" placeholder="Search product..." aria-label="Search" style="height: 40px; width: 350px" value="{{ request('search') }}" id="cari-data">
                <button class="btn btn-outline-primary" type="submit" id="btn-cari">Search</button>
            </form>
        </div>
    </nav>

    @if ($spareParts->count())
    <div class="row row-cols-1 row-cols-md-4">
        @foreach($spareParts as $sparePart)
        <div class="col mb-4">
            <div class="card">

                @if($sparePart->image)
                <img src="{{ asset('storage/' . $sparePart->image) }}" class="card-img-top" alt="Spare Part Image" style="height: 180px;">
                @else
                <img src="https://source.unsplash.com/featured/?spare-part" class="card-img-top" alt="Spare Part Image" style="height: 180px;">
                @endif

                <div class="card-body">
                    <h5 class="card-title mb-0 fs-5 fw-bold">{{ $sparePart->nama_part }}</h5>
                    <p class="card-text mb-0 fw-bold fs-5 text-primary">${{ number_format($sparePart->harga, 0, ',', '.') }}</p>

                    <p class="card-text mb-0">Jenis: {{ $sparePart->jenis }}</p>
                    <p class="card-text mb-0">Stok: {{ $sparePart->stok }}</p>
                    <p class="card-text mt-0"><small class="text-muted">{{ $sparePart->created_at->diffForHumans() }}</small></p>
                    <div class="d-grid gap-2">
                        <a href="/dashboard/product/{{ $sparePart->id }}/edit" class="btn btn-primary btn-sm">Update</a>
                        <form action="/dashboard/product/{{ $sparePart->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger w-100 btn-sm" type="submit" onclick="confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="mb-auto">
        <p class="fw-bold fs-4 text-center lh-auto">No product found for {{ request('search') }}</p>
    </div>
    @endif

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3">
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Buat Data Product Baru">
            <a href="/dashboard/product/create" class="btn btn-primary btn-lg py-3 px-3">
                <i class="bi bi-plus d-flex justify-content-center align-items-center fs-2 fw-bold"></i>
            </a>
        </span>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus product ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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


</main>
@endsection
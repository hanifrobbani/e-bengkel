@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 p-0">
    <div class="bg-body-secondary  bg-opacity-50">
        <div class="container px-4 py-2">
            <h3 class="mb-4">Manajemen Data User</h3>
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <form class="d-flex " role="search" action="{{ url('/dashboard/setting') }}">
                        <input class="form-control me-2 border border-secondary-subtle" type="search" name="search" placeholder="Search users..." aria-label="Search" style="height: 35px; width: 350px" value="{{ request('search') }}" id="cari-data">
                    </form>
                </div>
                <div class="col-auto mb-3">
                    <a href="/dashboard" class="icon-link icon-link-hover text-decoration-none text-dark">
                        <i class="bi bi-box-arrow-left"></i> Back
                    </a>

                </div>
                <div class="col-auto mb-3">
                    <button class="btn btn-primary px-2" type="button"><i class="bi bi-plus-lg me-2"></i>Buat user baru</button>
                </div>
            </div>
        </div>

    </div>
    
    @if(session()->has('success'))
    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
        <div class="toast toast-xxl bg-body-tertiary" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-body-primary">
                <strong class="me-auto text-success fw-bold">Success!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body fs-6 fw-semibold">
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

    <div class="container px-4 py-2">

        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col" class="text-center">Update</th>
                        <th scope="col" class="text-center">Delete</th>

                    </tr>
                </thead>

                @foreach($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-center"><a href="/dashboard/setting/edit/{{ $user->id }}"><i class="bi bi-pencil-fill text-primary"></i></a></td>

                        <form action="/dashboard/setting/delete/{{ $user->id}}" method="post">
                            @method('delete')
                            @csrf
                            <td class="text-center"><button class="btn btn-link m-0 p-0" type="submit"><i class="bi bi-trash3 text-danger"></i></button></td>
                        </form>
                    </tr>
                </tbody>
                @endforeach
        </div>
    </div>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3">
        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Buat Data User Baru">
            <a href="/dashboard/setting/create" class="btn btn-primary btn-lg py-3 px-3">
                <i class="bi bi-plus d-flex justify-content-center align-items-center fs-2 fw-bold"></i>
            </a>
        </span>
    </div>
    @endsection
</main>
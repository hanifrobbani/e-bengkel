@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1>Data Customer</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @foreach($customers as $customer)
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $customer->nama_customer }}</td>
                <td>{{ $customer->no_telp }}</td>
                <td>{{ $customer->alamat }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

</main>
@endsection
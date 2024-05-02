@extends('navbar')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container-fluid bg-white mt-4 shadow rounded" style="max-width: 70%;">
        <div class="row justify-content-center px-5 py-4">
            <form action="/dashboard/setting/create" method="post">
                @csrf
                <h1>Create New User</h1>
                <div class="form-group  mt-4">
                    <label for="form2Example1">Username</label>
                    <input type="text" id="form2Example1" class="form-control @error('username') is-invalid @enderror" name="username" required value="{{ old('username')}}" />
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="form2Example2">Email</label>
                    <input type="email" id="form2Example2" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email')}}"/>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-2 mt-2">
                    <label for="form2Example2">Role</label>
                    <select id="inputState" class="form-select @error('role') is-invalid @enderror" name="role" required>
                        <option value="admin" selected>Admin</option>
                        <option value="operator">Operator</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>      

                <!-- Password input -->
                <div class="form-group ">
                    <label for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" name="password" required />
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Submit button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4 px-4 py-2">Create</button>
                </div>

            </form>
        </div>
    </div>
</main>
@endsection
@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  <div class="pagetitle">
  </div>
  <section class="section dashboard">
    <div class="col-12">
      <div class="row">
        <div class="card top-selling overflow-auto">
          <div class="content mt-3">
            <div class="animated fadeIn">

              @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
              @endif

              <div class="card-header">
                <table width="100%" class="fa fa-text-height" aria-hidden="true" border="0" cellpadding="0" cellspacing="0" class="fa fa-align-center">
                  <tr>
                    <td>
                      <h5 class="card-title">Ubah Data Jenis Barang</span></h5>
                    </td>
                    <td>
                      <div align="right"><a href="{{ url('./jenis')}}" class="btn btn-success btn-sm">
                          <span class="" style="font-size:16px"> Back</span></a>
                      </div>
                    </td>
                  </tr>
                </table>

                <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                      <form action="/dashboard/jenis/{{ $jenis->id}}" method="post" enctype="multipart/form-data">

                        @method('put')
                        @csrf
                        <div class="row mb-3">
                          <label for="kd_jenis" class="col-sm-2 col-form-label">Kode Jenis</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" readonly value="{{ old('id',$jenis->id) }}" name="id" required autofocus>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nik" class="col-sm-2 col-form-label">Jenis Sparepart</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ old('nama_jenis',$jenis->nama_jenis) }}" name="nama_jenis" required autofocus>
                          </div>
                        </div>


                        <button type="submit" class="btn btn-success" style="font-size:16px"><span class="green-color"> Update </span></button>

                      </form>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
@endsection
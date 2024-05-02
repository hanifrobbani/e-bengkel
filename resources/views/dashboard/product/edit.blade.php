<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@extends('navbar')

@section('container')

<body class="bg-body-secondary">
    <div class="container-sm bg-white mt-4 shadow rounded w-50">
        <div class="row justify-content-center px-4 py-3">
            <h2 class="h2">Update Product</h2>
            <form class="row g-3" action="/dashboard/product/{{ $spareParts->id}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama Suku Cadang</label>
                    <input type="text" class="form-control @error('nama_part') is-invalid @enderror" id="inputEmail4" name="nama_part" required value="{{ old('nama_part', $spareParts->nama_part)}}">
                    @error('nama_part')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Harga</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="inputPassword4" name="harga" required value="{{ old('harga', $spareParts->harga)}}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Jenis</label>
                    <select id="inputState" class="form-select @error('jenis') is-invalid @enderror" name="jenis" required>
                        @foreach ($jenis as $item)
                        <option value="{{ $item->nama_jenis }}" {{ old('nama_jenis') == $item->nama_jenis ? 'selected' : '' }}>{{ $item->nama_jenis }}</option>
                        @endforeach
                    </select>

                    @error('jenis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Stok</label>
                    <input type="number" class="form-control @error('stok') is-invalid @enderror" id="inputPassword4" name="stok" required value="{{ old('stok', $spareParts->stok)}}">
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="hidden" name="oldImage" value="{{ $spareParts->image}}" />
                    @if($spareParts->image)
                    <img class="img-preview img-fluid mb-3 col-sm-6 d-block" src="{{ asset('storage/' . $spareParts->image) }}" />
                    @else
                    <img class="img-preview img-fluid rounded col-sm-6 mb-3" />
                    @endif
                    <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="floatingTextarea2">Deskripsi Singkat</label>
                    <div class="form-floating">
                        <textarea class="form-control @error('deskripsi_product') is-invalid @enderror px-2 py-3" id="floatingTextarea2" style="height: 120px" required name="deskripsi_product">{{ old('deskripsi_product', $spareParts->deskripsi_product)}}</textarea>
                        @error('deskripsi_product')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Update Product</button>
                </div>
            </form>

        </div>
    </div>

</body>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container bg-white mt-4 pb-5" style="max-width: 80%;">
        <form class="row g-3" method="post" action="/dashboard/transaksi/create">
            @csrf
            <h2>Transaksi <span class="text-primary">E-Bengkel</span></h2>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label fw-bold">Nama Pelanggan</label>
                <input type="text" class="form-control border border-secondary  border-opacity-75 @error('nama_pelanggan') is-invalid @enderror" id="inputEmail4" name="nama_pelanggan">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label fw-bold">No Telepon</label>
                <input type="number" class="form-control border border-secondary border-opacity-75 @error('no_telp') is-invalid @enderror" id="inputPassword4" name="no_telp">
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control border border-secondary  border-opacity-75 @error('alamat') is-invalid @enderror" id="inputAddress" name="alamat">
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label fw-bold">Jenis Transaksi</label>
                <select id="inputState" class="form-select border border-secondary  border-opacity-75 @error('jenis_transaksi') is-invalid @enderror" name="jenis_transaksi">
                    <option>Pembelian Suku Cadang</option>
                    <option>Service Kendaraan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label fw-bold">Nama Barang</label>
                <select id="inputState" class="form-select border border-secondary border-opacity-75 @error('data_barang') is-invalid @enderror" name="data_barang">
                    @foreach($spareParts as $sparePart)
                    <option value="{{ $sparePart->nama_part }}">{{ $sparePart->nama_part }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                <input type="number" class="form-control border border-secondary border-opacity-75 @error('jumlah_barang') is-invalid @enderror" id="jumlah" oninput="calculateSubtotal()" name="jumlah_barang">
            </div>
            <div class="col-md-6">
                <label for="harga" class="form-label fw-bold">Harga</label>
                <input type="number" class="form-control border border-secondary border-opacity-75 @error('harga_barang') is-invalid @enderror" id="harga" oninput="calculateSubtotal()" name="harga_barang">
            </div>
            <div class="col-md-6">
                <label for="subtotal" class="form-label fw-bold">Sub Total </label>
                <input type="text" class="form-control border border-secondary border-opacity-75 @error('total_payment') is-invalid @enderror" id="subtotal" readonly name="total_payment">
            </div>
            <div class="col-md-6">
                <label for="uangTunai" class="form-label fw-bold">Uang Tunai</label>
                <input type="text" class="form-control border border-secondary border-opacity-75 @error('uang_tunai') is-invalid @enderror" id="uangTunai" oninput="calculateKembalian()" name="uang_tunai">
            </div>
            <div class="col-md-6">
                <label for="kembalian" class="form-label fw-bold">Kembalian</label>
                <input type="text" class="form-control border border-secondary border-opacity-75 @error('kembalian') is-invalid @enderror" id="kembalian" readonly name="kembalian">
            </div>
            <div class="col-md-12">
                <label for="floatingTextarea" class="form-label fw-bold">Catatan</label>
                <textarea class="form-control border border-secondary  border-opacity-75 @error('catatan') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea" name="catatan"></textarea>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="bi bi-printer-fill me-2"></i>Cetak Data</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill me-2"></i>Simpan Data</button>
            </div>
        </form>
    </div>


</main>
@endsection

<script>
    function calculateSubtotal() {
        var jumlah = document.getElementById('jumlah').value;
        var harga = document.getElementById('harga').value;
        var subtotal = jumlah * harga;
        document.getElementById('subtotal').value = subtotal;
    }

    function calculateKembalian() {
        var subtotal = parseFloat(document.getElementById('subtotal').value);
        var uangTunai = parseFloat(document.getElementById('uangTunai').value);
        var kembalian = uangTunai - subtotal;
        if (kembalian >= 0) {
            document.getElementById('kembalian').value = kembalian.toFixed(2);
        } else {
            document.getElementById('kembalian').value = "Uang Tunai Kurang";
        }
    }
</script>
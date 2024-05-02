@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-secondary">

    <div class="container-fluid d-flex justify-content-center py-4">

        <div class="row bg-white rounded">
            <h4 class="mb-4 pt-2">Detail Transaksi</h4>
            <div class="col" id="printableArea">
                <div class="row d-flex justify-content-between ">
                    <div class="col-auto">
                        <p>Nama Pelanggan:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->nama_pelanggan}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Jenis Transaksi:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->jenis_transaksi}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Tanggal Pembelian:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->created_at->format('d M Y')}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Nama Barang:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->data_barang}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Harga:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->harga_barang}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Jumlah Dibeli:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ $transaksis->jumlah_barang}} buah</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <b>Sub Total:</b>
                    </div>
                    <div class="col-auto">
                        <b>{{ number_format($transaksis->total_payment, 0, ',', '.')}}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between my-3 border-bottom border-secondary">
                </div>

                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Uang Tunai:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ number_format($transaksis->uang_tunai, 0, ',', '.') }}</b>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <p>Kembalian:</p>
                    </div>
                    <div class="col-auto">
                        <b>{{ number_format($transaksis->kembalian, 0, ',', '.')}}</b>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-auto pt-1 pb-2">
                    <button type="submit" class="btn btn-primary" onclick="printDiv('printableArea')">
                        <i class="bi bi-printer-fill me-2"></i>Cetak Data
                    </button>
                </div>
            </div>
        </div>
    </div>


</main>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
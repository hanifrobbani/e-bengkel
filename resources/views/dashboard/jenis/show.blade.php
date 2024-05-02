@extends('navbar')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
 
<head>
    <script type="text/javascript">
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;
        }
        printDiv('printableArea');
    </script>
      
 <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
  <tr   align="right"> 
    <td> 
    <a href="#" onclick="printDiv('printableArea')" class="btn btn-success btn-sm">  
      <span class="" style="font-size:16px"> Print Data</span> </a> 
     <a href="{{ url('./jenis')}}" class="btn btn-success btn-sm" >
       <span class="" style="font-size:16px"> Back</span></a>  
    </td> 
    </tr>
  </table>


<div id="printableArea">
        <td align="center">
          <h5 class="card-title" align="center">Daftar Jenis Barang </h5>
        </td>
        <table class="table table-bordered">
                <thead>
                    <tr  bgcolor="gray">
                        <th>No</th>
                        <th>Kode Jenis</th>
                        <th>Nama Jenis</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($jenis as $jeniss)
                    <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$jeniss->id}}</td>
                    <td>{{$jeniss->nama_jenis}}</td> 
                    </tr>
                @endforeach
                </tbody>
            </table> 
    </div> 

    </main>
@endsection
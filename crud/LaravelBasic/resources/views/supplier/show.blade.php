@extends('template/bootstrap')

@section('title')
  Detail data suplier
@endsection

@section('content')
<div class="card">
        <div class="card-header">
            Detail Supplier
        </div>
        <div class="card-body">
        <a href="{{ route('supplier.index') }}" class="btn btn-success">back</a>
        <hr>
         <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>{{ $supplier->nama_supplier }}</td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td>{{ $supplier->telp_supplier }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $supplier->alamat_supplier }}</td>
                    </tr>
         </table>
        </div>
 </div>       
@endsection


@extends('template/bootstrap')

@section('title')
  tampil data suplier
@endsection

@section('content')
<div class="card">
        <div class="card-header">
            Tampil Supplier
        </div>
        <div class="card-body">
        <a href="{{ route('supplier.create') }}" class="btn btn-success">Create</a>
        <hr>
         <table class="table tabled-bordered">
            <tr>
              <th>No</th>
              <th>Nama Supplier</th>
              <!-- <th>Telp Supplier</th>
              <th>Alamat Supplier</th> -->
              <th>Action</th>
            </tr>
            @forelse($data_supplier as $row)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->nama_supplier }}</td>
              <!-- <td>{{ $row->telp_supplier }}</td>
              <td>{{ $row->alamat_supplier }}</td> -->
              <td>
              <form action="{{ route('supplier.destroy',[$row->kd_supplier]) }}" method="post">
                @csrf
                {{ METHOD_FIELD('DELETE') }}
                <a href="{{ route('supplier.edit',[$row->kd_supplier]) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('supplier.show',[$row->kd_supplier]) }}" class="btn btn-primary">Show</a>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </td>
            </tr>
            @empty
              <tr>
                <td>Data Kosong Brother</td>
               </tr>
            @endforelse   
         </table>
        </div>
 </div>       
@endsection


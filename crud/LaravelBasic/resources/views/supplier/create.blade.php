@extends('template/bootstrap')

@section('title')
  form suplier
@endsection

@section('content')
<div class="card">
        <div class="card-header">
            Tambah Data Supplier
        </div>
        <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="post" action="{{ route('supplier.store') }}">
            <div class="form-group">
            @csrf
                <label for="nama_supplier">Nama Supplier</label>
                <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="Masukan Nama Supplier" value="{{ old('nama_supplier') }}">
            </div>
            <div class="form-group">
                <label for="telp_supplier">Telp Supplier</label>
                <input type="text" class="form-control" id="telp_supplier" name="telp_supplier" placeholder="Masukan Telp Supplier" value="{{ old('telp_supplier') }}">
            </div>
            <div class="form-group">
                <label for="alamat_supplier">Alamat Supplier</label>
                <textarea name="alamat_supplier" id="alamat_supplier" class="form-control">{{ old('alamat_supplier') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>     
@endsection


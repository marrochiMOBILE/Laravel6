# dalam mengatur template guys
buat dulu template yg ingin di custom
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">N.B.C.Y.S</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  active">
            <a class="nav-link" href="#">Supplier</a>
          </li>
        </ul>
      </div>
    </nav>

    <br><br>
    <main role="main" class="container mt-5">
    @yield('content')
    </main><!-- /.container -->
</body>
</html>
```

dan gunakan template lain untuk menghubungkan templatenya :
```php
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


```


## kalian jugha bisa menggunakan include
#### file yg di costum
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @yield('cssjs')
</head>
<body>
    @yield('header')

    @yield('content')

    @yield('footer')
</body>
</html>
```

#### file yg di include
```php
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
```
#### file yg dipake
```php
@extends('tesBase')

@section('title')
    Tentang Blade
@endsection

@section('cssjs')
   @include('includd')
@endsection

@section('header')
    <hr>
    <h1>bagian Header Bos</h1>
    <hr>
@endsection

@section('content')
    <h3>ini bagian content</h3>
@endsection

@section('footer')
    <hr>
    <h1>Bagian Footer bos</h1>
    <hr>
@endsection
```

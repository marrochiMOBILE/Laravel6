# blade 

## komentar
di blade kalian membuat komentar hanya seperti dibawah ini
```php
{{-- bebas tulis komentar disini --}}
```
## Menampilkan Nilai Variabel
```php
{{ $namaVariabel }}
```
contoh dibawah ini bosque :
```php
$data['nama'] = "marrochi";
$data['umur'] = 23; 
Route::view('blade', 'tes', $data);

// atau

Route::view('blade', 'tes',["nama" => "marrochi", "umur" => 23]);
```
```php
{{-- komentar menampilkan nama dan umur --}}
{{ $nama }}
{{ $umur }}
```

## perintah php
```php
@php
 // perintahnya
@endphp
```

## perintah if
```php
@if(condition)
 // statement
@elseif(condition)
 // statement
@else
 // statement
@endif 
```
contoh dibawah ini brother
```
@php
 $umur = 3;
@endphp

@if($umur == 10)
    kamu sudah berumur 10 tahun
@elseif($umur == 3)
    kamu masih 3 tahun
@else
    kamu sudah besar
@endif 
```

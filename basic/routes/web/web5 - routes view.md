# routes view 
adalah salah satu routing untuk memanggil langsung view , view bearda dibawah ini :
> namaAppKalian\resources\views\namaviewkalian.blade.php
ok langsung saja lihat contoh dibawah ini 1.1ex;

```php
Route::view('tesBootstrap','template/bootstrap');
```

bisa jugha memparsing data berupa array

```php
Route::view('gambaran','tes',["nama" => 'Marrochi']);
```

# routes group 
sekumpulan routes yang hanya butuh memanggil 1 routes contoh dibawah ini 1.1ex;

```php
Route::group(["prefix"=>"tes"], function(){
 Route::get('/','tes3@all');
 Route::get('all','tes3@all');
 Route::get('kaos','tes3@kaos');
 Route::get('celana','tes3@celana');
 Route::get('rok','tes3@rok');
});
```

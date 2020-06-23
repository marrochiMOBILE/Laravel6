# controller
adalah yg menagtur antara model dan view. ketika routing meminta controller disitulah controller yg dimkasud akan meksekusi.
controller berada di : 
> namaAppKalian\App\Http\Controllers\namaControllerKalian

perintah membuat controller sederhana :
```
php artisan make:controller NamaControllernya
```

cara mengaksesnya diatas seperti ini :
```php
Route::get('/','NamaControllernya@kemudianMethodnya')
```

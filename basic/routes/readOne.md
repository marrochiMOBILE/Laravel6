## mengenal routing!!
routing digunakan untuk mengatur URL yang bisa diakses oleh pengguna, serta menentukan halaman mana yang akan dibuka ketika pengguna aplikasi mengakses uri tertentu.

> www.Domain.com/

> www.Domain.com/about

> www.Domain.com/profile

> www.Domain.com/(atau-yg-lainya)

## kode routing
```php
Route::verb("path", callback);
```

+ Facade Route
+ Verb adalah HTTP Verb (get, post, put, delete, options, patch)
+ Path adalah alamat url yang dikases setelah domain aplikasi
+ callback adalah hal yang akan diproses dapat berupa function / Controller action yang akan diakses ketika path tertentu diakses oleh pengguna

contoh : 
```php
Route:get('/', function(){
  return view('welcome');
});
```

-  get adalah verb
- '/' adalah path
- funtion adalah callback




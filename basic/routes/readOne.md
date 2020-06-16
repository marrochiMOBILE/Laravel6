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



## routing di laravel ada 4
kalian bisa ke foldernya langsung disitu bisa terlihat jelas nampak wajahnya.
> namaAppkalian\routes\(1.api | 2.channels | 3.console | 4.web ).

masing-masing routing tersebut intinya sama untuk mengatur routing cuman mempunyai fungsi yang berbeda
1. web adalah routing yg mengatur akses dari http request
2. api adalah routing yang sama dengan web , tapi root ini digunakan untuk API
3. console adalah routing yg digunakan untuk mendefinisikan jalur akses aplikasi yg sedang kita buat dengan melalui command line.
4. channels adalah routing memliliki fungsi untuk meng otorisasi channel broadcast di aplikasi yg sedang kita buat.

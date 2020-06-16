## routing web
> `location file : namaAppKalian/routes/web.php`
## views
> `location file : namaAppKalian/resources/views/welcome.blade.php`
## Controller
> `location file : amaAppKalian/app/Http/Controllers/OlahragaController.php`

### 1.1ex
```php
Route::get('/',function(){
  return view('welcome');
});
```
penjelasan :

+ `/` path ini adalah ketika browser membaca pertama kali = appDomainKalian.com atau appDomainKalian.com/
+ `view` disini untuk menampilkan templatenya yg berada didalam folder views yg bernama welcome.blade.php

### 1.2ex
```php
Route::get('profile', function(){
  return view('profile');
});
```

+ `profile` path ini adalah ketika browser membaca domain kalian seprti => appDomainKalian.com/profile
+ `view` disini untuk menampilkan templatenya yg berada didalam folder views yg bernama profile.blade.php

### 1.3ex
```php
Route::get('about', function(){
  return 'ini halaman about us';
});
```

+ `about` path ini adalah ketika browser membaca domain kalian seprti => appDomainKalian.com/about
+ `return` disini mengembalikan tampilan dengan teks string `ini halaman about us`


### 1.4x
```php
 Route::get("olahraga","OlahragaController@halo");
```
+ `olahraga` path ini adalah ketika browser membaca domain kalian seprti => appDomainKalian.com/olahraga
+  `OlahragaController` adalah controller
+  `@halo` adalah method yg diminta

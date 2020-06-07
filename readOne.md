# Hal Yang Diperlukan

1. install php 7.2 ke atas
2. intsall composer 
3. install text-editor (disini sayang menggunakan visual studio code)


## untuk mengecek  composer terinstal
kalian pergi menuju cmd terus ketikan dibawah ini

```
composer -v
```


## setelah itu instal laravel yg diinginkan (disini saya pilih laravel 6)
kalian bisa ke websitenya langsung untuk melihat documentation

https://laravel.com/

ke cmd dan arahkan ke htdocs, kemudian tulis dibawah seperti ini

```
composer create-project --prefer-dist laravel/laravel namaProjectAndaBebas "6.*"
```

setelah itu tunggu sampai ke intal semua.

## untuk mengakses websitenya
bisa melalui localhost dengan menyebut nama file yg kalian buat atau jugha kalian bisa menggunakan php artisan.
misalnya kalian buat dengan nama latihanLaravel6. maka kalian ke cmd dan arahkan ke file latihanLaravel6.
tulis di cmd/terminal seperti dibawah ini.

```
php artisan serve
```
maka output yg keluar
```
Laravel development server started: http://127.0.0.1:8000
```

kemudian kalian copy link tersebut dan paste di localhost
```
http://127.0.0.1:8000
```

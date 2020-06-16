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

## memparsing data di routing
### compact 
single data :
```php
<!-- location file : namaAppKalian/routes/web.php --> 
Route::get('tes', function(){
    $parsingDataNama = 'ochi';
    return view('tes',compact('parsingDataNama'));
});
```
```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman {{ $parsingDataNama  }}
```
double data: 
```
<!-- location file : namaAppKalian/routes/web.php --> 
Route::get('tes', function(){
    $dataBiasa = "Hello Selamat Datang";
    $dataArraySingle[] = 'kimi'; 
    $dataArraySingle[] = 'hime'; 
    $dataArraySingle[] = 'aori'; 
    $dataArraySingle[] = 'osaka'; 
    $dataArraySingle[] = 'miyabi'; 
    $dataArrayDouble = [[
                        'nama' => 'marrochi',
                        'umur' => '23'
                        ],[
                        'nama' => 'kamila',
                        'umur' => '20'
                        ]
                    ];
    return view('tes',compact('dataBiasa','dataArraySingle','dataArrayDouble'));
});
```
```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman tes
<hr>
data biasa => {{ $dataBiasa }}
<hr>
@php
     $dataArraySingle_length = count($dataArraySingle);
@endphp

<hr>
dataArraySingle :  <br>
<hr>
@for ($i = 0; $i < $dataArraySingle_length ; $i++)
    ini nilainya {{ $o = (0+$i) }} :    {{ $dataArraySingle[$i] }} <br> 
@endfor

<hr>
data array double
<hr>
<table>
@foreach($dataArrayDouble as $double)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $double['nama'] }}</td>
    <td>{{ $double['umur'] }}</td>
</tr>
@endforeach
</table>

```

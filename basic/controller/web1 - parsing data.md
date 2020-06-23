# parsing data di controller
### routing web
> `location file : namaAppKalian/routes/web.php`
### views
> `location file : namaAppKalian/resources/views/welcome.blade.php`
### Controller
> `location file : amaAppKalian/app/Http/Controllers/OlahragaController.php`



### memparsing data di controller dibawah ini :
## `compact` 
single data :
```php
    $parsingDataNama = 'ochi';
    return view('tes',compact('parsingDataNama'));
```
```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman {{ $parsingDataNama  }}
```
double data: 
```php
    $data['olahraga'] = "bulu tangkis";
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
    return view('tes',compact('dataBiasa','dataArraySingle','dataArrayDouble','data'));
```
```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman tes
<hr>
ini adalah data => {{ $data['olahraga'] }}
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

## `array`
```php

    $data['olahraga'] = "bulu tangkis";
    $data['hello'] = "Hello Selamat Datang";
    $data['array'] = [[
                        'nama' => 'marrochi',
                        'umur' => '23'
                        ],[
                        'nama' => 'kamila',
                        'umur' => '20'
                        ]
                    ];
    return view('tes',$data);

```

```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman tes
<hr>
data olahraga => {{ $olahraga }}
<hr>
data hello => {{ $hello }}
<hr>

<hr>
data array dibawah ini
<hr>
<table>
@foreach($array as $double)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $double['nama'] }}</td>
    <td>{{ $double['umur'] }}</td>
</tr>
@endforeach
</table>
```
## `with`
```php
    $data['olahraga'] = "bulu tangkis";
    $data['hello'] = "Hello Selamat Datang";
    $data['array'] = [[
                        'nama' => 'marrochi',
                        'umur' => '23'
                        ],[
                        'nama' => 'kamila',
                        'umur' => '20'
                        ]
                    ];
    return view('tes')->with($data);
```

```php
<!-- location file : namaAppKalian/resources/views/tes.blade.php --> 
ini adalah halaman tes
<hr>
data olahraga => {{ $olahraga }}
<hr>
data hello => {{ $hello }}
<hr>

<hr>
data array dibawah ini
<hr>
<table>
@foreach($array as $double)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $double['nama'] }}</td>
    <td>{{ $double['umur'] }}</td>
</tr>
@endforeach
</table>
```

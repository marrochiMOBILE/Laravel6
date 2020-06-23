# routes name
adalah memeberikan name kepada routes, yg kemudian kita bisa memanggilnya ketika saat dibutuhkan.
contoh dibawah ini 1.1ex:
```php
Route::get('tes', function(){
 return view('tes');
})->name('tes');

Route::get('panggil', function(){
    return redirect()->route('tes');
});
```
untuk menggunakan parameter belum dikeatahui contoh 1.2ex:
```php
Route::get('tes/{param?}', function($params = 'marrochi'){
 return view('tes', compact('params'));
})->name('tes');

Route::get('panggil', function(){
    return redirect()->route('tes');
});
```

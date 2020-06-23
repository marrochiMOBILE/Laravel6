# routing menggunakan parameter 

contoh dibawah ini perhatikan 1.1ex:
```php
Route::get('tes2/{param}',function($params){
      return 'ini adalah params -> '.$params;
});
```

sekarang parsing ke controller lihat contoh dibawah ini 1.2ex:
##### routenya
```php
Route::get('tes3/{param}','tes3@index');
```
##### controllernya
```php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tes3 extends Controller
{
    public function index($params){
            return 'ini adalah parameter -> '.$params;
    }
}

```
## parameter opsional
memberi opsi ada tidaknya parameter tersebut contoh dibawah ini 2.1ex :
```php
Route::get('tes2/{param?}',function($params = "marrochi"){
      return 'ini adalah params -> '.$params;
});
```
kemudaian contoh 2.2ex
##### routenya
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tes3 extends Controller
{
    public function index($params = 'marrochi'){
            return 'ini adalah parameter -> '.$params;
    }
}

```
##### controllernya
```php
Route::get('tes3/{param?}','tes3@index');
```

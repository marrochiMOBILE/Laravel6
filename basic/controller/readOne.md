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
Route::get('produk','NamaControllernya@kemudianMethodnya')
```

contoh dibawah 1.1ex:
##### routenya
```php
Route::get('produk','NamaControllernya@index');
```

##### controlernya :
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaControllernya extends Controller
{
    public function index(){
        return 'mister deni ok mantap';
    }
}
```

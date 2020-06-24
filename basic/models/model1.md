# model
location File
> namaAppKalian\App\ModelKalian.php

perintah membuat model :
```
php artisan make:model NamaModel
```
contoh:
```
php artisan make:model Supplier
```

```php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";
    protected $primaryKey = "kd_supplier";
    protected $fillable = ["nama_supplier","alamat_supplier","telp_supplier"];
    public $timestamps = false;
}

```

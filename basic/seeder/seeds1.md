# seeder atau seeds
location file: 
> namaAppKalian\database\seeds\namaSeederKalian.php
digunakan untuk data dummy atau percobaan data. cara membuat seeder dibawah ini perintahnya :
```
php artisan make:seeder NamaSeeder
```

contoh kita menggunakan nama SupplierTableSeeder.php
```
php artisan make:seeder SupplierTableSeeder
```

kemudian diisi
```php
use Illuminate\Database\Seeder;
use App\Supplier;
class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier1 = new Supplier;
        $supplier1->nama_supplier = "Grosir Kaos Surabaya";
        $supplier1->alamat_supplier = "Rungkut";
        $supplier1->telp_supplier = "08134678765";
        $supplier1->save();

        $supplier2 = new Supplier;
        $supplier2->nama_supplier = "Grosir Tas Surabaya";
        $supplier2->alamat_supplier = "Gunung Anyar";
        $supplier2->telp_supplier = "085789098374";
        $supplier2->save();
    }
}
```
diatasnya kan ada DatabaseSeeder.php , taruh jugha untuk pemanggilan.
```php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SupplierTableSeeder::class);
    }
}

```

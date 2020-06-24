# perintah-perintah

file location:
> namaAppKalian\database\migrations\namaMigrationYgKalianBuat

```
---------------------------------------------
perintah-perintah migration yg umum digunakan
----------------------------------------------
----\ membuat table ---- 1.1.ex
php artisan make:migration create_supplier_table --create=supplier

----\ update tabel ---- 1.2ex
php artisan make:migration add_telp_to_supplier --table=supplier

----\ menjalankan migration ----
php artisan migrate

----\ mengembalikan yg sebelumnya ----
php artisan migrate:rollback

----\ menghapus seluruh perintah migration ----
php artisan migrate:reset

----\ menghapus dan menulis ulang migrate ----
php artisan migrate:refresh
```


### 1.1ex
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->bigIncrements('kd_supplier');
            $table->string('nama_supplier',100);
            $table->string('alamat_supplier',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}

```
### 1.2ex
```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelpToSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier', function (Blueprint $table) {
            $table->string('telp_supplier',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
         $table->dropColumn('telp_supplier');
        });
    }
}

```

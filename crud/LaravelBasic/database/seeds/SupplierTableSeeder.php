<?php

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

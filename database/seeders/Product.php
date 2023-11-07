<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
       'OrderID'=>1,
       'ProductName'=>'Amara',
       'Price'=>200,
       'Quantity'=>5,
       
    ]);

       }
}

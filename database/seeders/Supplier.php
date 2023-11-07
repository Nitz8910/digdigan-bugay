<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            'SupplierID'=>0021,
            'SupplierName'=>'Ambo',
            'ContactNo'=>09508737334,
            'Address'=>'Samal Bataan',
            
         ]);
     
    }
}

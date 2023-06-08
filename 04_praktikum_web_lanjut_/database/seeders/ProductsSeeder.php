<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => ' t-shirt',
            'description' => 'Baju yang paling bagus',
            'price' => 200000,
            'image' => 'https://www.converse.id/media/catalog/product/cache/
            144a401d4eb9f312744987a3cea154c3/0/1/01-CONVERSE-AYAV6CONA-CONUT2033001-Black.jpg',
            'created_at' => Carbon::now()],
            ['name' => 'Sepatu',
            'description' => 'Sepatu hits',
            'price' => 3000000,
            'image' => 'https://www.converse.id/media/catalog/product/cache/144a401d4eb9f312744987a3cea154c3/C/O/CON162050C-1.jpg',
            'created_at' => Carbon::now()],
            ['name' => 'CONVERSE bag',
            'description' => 'Tas hits',
            'price' => 400000,
            'image' => 'https://www.converse.id/media/catalog/product/cache/e81e4f913a1cad058ef66fea8e95c839/C/O/CONBPS130401-1.jpg',
            'created_at' => Carbon::now()],
        ]);
    }
}

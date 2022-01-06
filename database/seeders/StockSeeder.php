<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            'Jackson PLC',
            'Braun-Graham',
            'Halvorson PLC',
            'Tromp-Zemlak',
            'Marks-Lesch',
            'Kling-Kiehn'
        ];

        foreach ($stocks as $stock) {
            Stock::factory()->create(['name' => $stock]);
        }
    }
}

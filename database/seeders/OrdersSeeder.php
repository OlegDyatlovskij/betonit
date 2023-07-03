<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Orders::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $data = [];
        for ($i = 1; $i < 4; $i++)
        {
            for ($y = 1; $y < 4; $y++)
            {
                $data[] = ['product_id' => $i, 'user_id' => $y, 'state' => 'В ожидании'];
            }
        }
        DB::table('orders')->insert($data);
    }
}

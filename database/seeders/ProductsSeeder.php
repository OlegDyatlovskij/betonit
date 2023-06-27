<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Products;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Products::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $data = [
            ['title' => 'Базовый', 'price' => '499', 'period' => 'В месяц за пользователя', 'description' => json_encode(['Планировщик производства', 'Канбан-доска', 'Сменно-суточные задания', 'Отчёты о работах'])],
            ['title' => 'Расширенный', 'price' => '999', 'period' => 'В месяц за пользователя', 'description' => json_encode(['Планировщик производства', 'Канбан-доска', 'Сменно-суточные задания', 'Отчёты о работах', '+ API для интеграций'])],
            ['title' => 'Профессиональный', 'price' => '1499', 'period' => 'В месяц за пользователя', 'description' => json_encode(['Планировщик производства', 'Канбан-доска', 'Сменно-суточные задания', 'Отчёты о работах', '+ API для интеграций', '+ Сложные техпроцессы'])]
        ];
        DB::table('products')->insert($data);
    }
}

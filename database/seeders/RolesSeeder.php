<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role' => "Администратор"],
            ['role' => "Модератор"],
            ['role' => "Редактор"],
            ['role' => "Пользователь"]
        ];
        DB::table('roles')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Петр Ершов', 'phone' => '89995432324', 'email' => 'ershov@mail.ru'],
            ['name' => 'екатерина Антонова', 'phone' => '89235472367', 'email' => 'antonova@gmail.com'],
            ['name' => 'Федор Федоров', 'phone' => '89653442904', 'email' => 'fedorov@mail.ru'],
        ];
        DB::table('users')->insert($data);
    }
}

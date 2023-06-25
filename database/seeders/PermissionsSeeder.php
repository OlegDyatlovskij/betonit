<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role_id' => '1', 'name' => 'Виктор', 'login' => 'victor123', 'password' => Hash::make('vitya321')],
            ['role_id' => '2', 'name' => 'Полина', 'login' => 'polya1983', 'password' => Hash::make('qwerty123')],
            ['role_id' => '3', 'name' => 'Оксана', 'login' => 'octopus', 'password' => Hash::make('asdfg34')],
            ['role_id' => '4', 'name' => 'Денис', 'login' => 'den228', 'password' => Hash::make('bigboss21')],
        ];
        DB::table('permissions')->insert($data);
    }
}

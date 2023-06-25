<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['INN' => '2130183567', 'company' => 'ООО «Команда Ф5»', 'phone' => '88002009397', 'address' => "Россия, г. Чебоксары, ул. Карла Маркса, 52/9", 'email' => 'hello@proplan.su', 'skype' => '#', 'whatsapp' => '#', 'telegram' => '#'];
        DB::table('information')->insert($data);
    }

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Головная программа',
            'description' => '<p class="block-tabs__content-text">
            Головная программа предназначена для формирования заявок, работ
            и отчетности. <br/>
            Этот модуль АСУ БатонИТ» имеет панель управления, через которую
            ответственный сотрудник (диспетчер) может создавать заявки для заводов,
            вести базу сотрудников, контрагентов
            и транспорта. Диспетчер может в онлайн отслеживать процесс выполнения
            назначенных им работ.<br/>
            Функция точной настройки рецептов позволяет обеспечить выпуск
            качественного материала на каждом заводе.
        </p>',
            'srcset' => 'img/block-tabs-1.webp',
            'alt' => 'block-tabs-1.jpg',
            'src' => 'img/block-tabs-1.jpg'],
            ['title' => 'Программа оператора',
            'description' => '<p class="block-tabs__content-text">
            Программа оператора, работает непосредственно на заводе с контролером
            РБУ и отвечает за отгрузку.<br/>
            Оператор — сотрудник, непосредственно отвечающий за отгрузку готовой
            продукции.
        </p>',
            'srcset' => 'img/block-tabs-2.webp',
            'alt' => 'block-tabs-2.jpg',
            'src' => 'img/block-tabs-2.jpg'],
            ['title' => 'Управление из браузера',
            'description' => '<p class="block-tabs__content-text">
            Управление АСУ ТП осуществляется посредством любого браузера с любого
            персонального компьютера завода, в случае с облачным решением управление
            возможно осуществлять и с мобильных
            устройств.
        </p>',
            'srcset' => 'img/block-tabs-3.webp',
            'alt' => 'block-tabs-3.jpg',
            'src' => 'img/block-tabs-3.jpg'],
            ['title' => 'Облачная или коробочная версия',
            'description' => '<ul class="block-tabs__content-list">
            Развертывание АСУ возможно в нескольких вариантах:
            <li class="block-tabs__content-item">Локальная АСУ (коробочная версия)
            </li>
            <li class="block-tabs__content-item">АСУ с применение облачного
                решения
            </li>
        </ul>
        <p class="block-tabs__content-text">
            Система может строиться как в локальной сети так и с использованием
            облачного сервиса, что в разы уменьшает стоимость системы и затраты
            на покупку и содержания серверного оборудования.
        </p>',
            'srcset' => 'img/block-tabs-4.webp',
            'alt' => 'block-tabs-4.jpg',
            'src' => 'img/block-tabs-4.jpg'],
            ['title' => 'Интеграции',
            'description' => '<p class="block-tabs__content-text">
            Программа может работать практически с любыми контроллерами РБУ, который
            имеет возможность подключения по технологии Ethernet и имеют открытый
            код для их программирования. <br/>
            Программа имеет обширный настраиваемый функционал отчетности, а также
            интеграцию с бухгалтерской системой 1С: Предприятие
        </p>',
            'srcset' => 'img/block-tabs-5.webp',
            'alt' => 'block-tabs-5.jpg',
            'src' => 'img/block-tabs-5.jpg']
        ];
        DB::table('facilities')->insert($data);
    }
}

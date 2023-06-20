<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'phone' => '800-555-3535',
                'address' => 'Россия, республика Татарстан, город Казань, улица Братьев Касимовых, дом 64',
                'total' => 92221.0,
                'message' => NULL,
                'status' => 1,
                'created_at' => '2023-05-01 20:02:05',
                'updated_at' => '2023-05-01 20:02:05',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'phone' => '800-555-3535',
                'address' => 'Россия, республика Татарстан, город Казань, улица Братьев Касимовых, дом 64',
                'total' => 193235.0,
                'message' => NULL,
                'status' => 1,
                'created_at' => '2023-05-01 20:02:48',
                'updated_at' => '2023-05-01 20:02:48',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'phone' => '800-555-3535',
                'address' => 'Россия, республика Татарстан, город Казань, улица Братьев Касимовых, дом 64',
                'total' => 128036.0,
                'message' => NULL,
                'status' => 0,
                'created_at' => '2023-05-01 20:03:05',
                'updated_at' => '2023-05-01 20:03:05',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'phone' => '800-555-3637',
                'address' => 'ул. Рябышева, 28, Ростов-на-Дону, Ростовская обл., 344037',
                'total' => 168800.0,
                'message' => 'Доставить в кратчайшие сроки',
                'status' => 1,
                'created_at' => '2023-05-01 20:05:33',
                'updated_at' => '2023-05-01 20:05:33',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'phone' => '800-555-3637',
                'address' => 'ул. Рябышева, 28, Ростов-на-Дону, Ростовская обл., 344037',
                'total' => 748178.0,
                'message' => NULL,
                'status' => 1,
                'created_at' => '2023-05-01 20:05:51',
                'updated_at' => '2023-05-01 20:05:51',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'phone' => '918-852-2525',
                'address' => 'ул. Петра Круглова, 41, Волгоград, Волгоградская обл., 400062',
                'total' => 651224.0,
                'message' => NULL,
                'status' => 0,
                'created_at' => '2023-05-01 20:06:30',
                'updated_at' => '2023-05-01 20:06:30',
            ),
        ));
        
        
    }
}
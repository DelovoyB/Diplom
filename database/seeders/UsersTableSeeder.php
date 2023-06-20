<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Виктор Дроздов',
                'represents' => 'РосАтом',
                'email' => 'erna.nolan@example.net',
                'avatar' => 'LljjqSRPslK3Wodo3nZyWQKIkrGtVB6xdUFWfnBp.webp',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'created_at' => '2023-05-01 17:34:07',
                'updated_at' => '2023-05-01 20:21:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Игорь Прокопенко',
                'represents' => 'АтомТехМонтаж',
                'email' => 'emailovich@naio.com',
                'avatar' => 'hkr35gNdM8A1v6THW5nAkzIEhEzEQQJGBkRY86bG.webp',
                'password' => '$2y$10$tl47Y0ERKLYnVgh45n73N.MWm4NV6gCEWeYOT6wqwKzAhW9O9GS/a',
                'created_at' => '2023-05-01 19:34:30',
                'updated_at' => '2023-05-01 20:22:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Вадим Краев',
                'represents' => NULL,
                'email' => 'kraev@yandex.ru',
                'avatar' => 'hxqqejDONQ5ApZTGxWetoe5vpdGDwgw6WuQabQd8.webp',
                'password' => '$2y$10$EBiw7A/ts1JOhHL0AjuDJ.xy0Swyu4BogZgl0A1U7XT84jRsLr8Ou',
                'created_at' => '2023-05-01 19:35:29',
                'updated_at' => '2023-05-01 20:22:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Кирилл Скороходов',
                'represents' => 'АтомТрубопроводМонтаж',
                'email' => 'skorohod@gmail.com',
                'avatar' => '41wbhjbuQMrAmChdc4lGNwB0M1yZ3WXpa62CF9sb.webp',
                'password' => '$2y$10$5DGqp493EL/E8oUZpEa6y.CBtnX1V/boc9J5nFEnDbw/sS8EFMC5.',
                'created_at' => '2023-05-01 19:36:39',
                'updated_at' => '2023-05-02 20:14:58',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Максим Захаров',
                'represents' => 'РосИнтерес',
                'email' => 'zaharov@br.ru',
                'avatar' => 'tKD7wuv9dhNL9FH4XaxrFfKRM2JodQ1nIOK4WZzB.webp',
                'password' => '$2y$10$Qhdiz0Fn1w2nM8xSxINUsey9zjc.8SLWIDyh6SD6VE6K7NOdC9YvS',
                'created_at' => '2023-05-01 19:54:32',
                'updated_at' => '2023-05-01 20:22:35',
            ),
        ));
        
        
    }
}
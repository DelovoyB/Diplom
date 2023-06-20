<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'Канальные вентиляторы',
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 'Центробежные вентиляторы',
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 'Крышные вентиляторы',
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 'Мультизональные вентиляторы',
            ),
        ));
        
        
    }
}
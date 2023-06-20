<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Данила Бендик',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$GllL0kZpcMSLuTv.p902qOcG.PGy0WIv5cJbKZ8FzZ0fWc5LpNPcO',
                'avatar' => 'lkSyf0M9zixQMbzjQepVzGGXuFi2D8iJ9ps0YFrh.jpg',
            ),
        ));
        
        
    }
}
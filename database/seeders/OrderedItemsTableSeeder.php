<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderedItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ordered_items')->delete();
        
        \DB::table('ordered_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 3,
                'quantity' => 2,
                'order_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 1,
                'quantity' => 4,
                'order_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 8,
                'quantity' => 1,
                'order_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 3,
                'quantity' => 6,
                'order_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 9,
                'quantity' => 1,
                'order_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 12,
                'quantity' => 2,
                'order_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 15,
                'quantity' => 2,
                'order_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 7,
                'quantity' => 2,
                'order_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 13,
                'quantity' => 5,
                'order_id' => 5,
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 15,
                'quantity' => 6,
                'order_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 1,
                'quantity' => 8,
                'order_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'item_id' => 7,
                'quantity' => 2,
                'order_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'item_id' => 13,
                'quantity' => 4,
                'order_id' => 6,
            ),
        ));
        
        
    }
}
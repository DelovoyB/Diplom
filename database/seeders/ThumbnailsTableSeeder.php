<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThumbnailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thumbnails')->delete();
        
        \DB::table('thumbnails')->insert(array (
            0 => 
            array (
                'id' => 1,
                'source' => 'aduVxfAxvO0jZM2TgNePTi6zpYGMm6otNPvDVHaW.jpg',
                'item_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'source' => 'CLEhTXc0yzJdagw3FeKrqTF3SqAU42GVee9L9DRl.jpg',
                'item_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'source' => '3uWXfoA6gDf1xBHQ6RDJwocuIUo9JgeUYdAuK0OP.jpg',
                'item_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'source' => 'hA9s4nFQXW4hUH1HkDQZzMSFlPyUS0XroNoq5rwg.jpg',
                'item_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'source' => '79czCBptaCoush3qUzTzTbvs4rDXm2kv7RoEqjHn.jpg',
                'item_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'source' => 'lk1vBNuOYUbKbbwXXxcDfjWaVOAcvsJsejEdS01f.jpg',
                'item_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'source' => 'gaNEyi9q62KcmtABeeB4WdUg7CCUeDRytq7ls4XL.jpg',
                'item_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'source' => 'gpatVj7aASxyAjgu648w1MEmraGO67nTSEJuUpMK.jpg',
                'item_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'source' => 'CEzJzWEqzk2KBsspDpBb9dAkvH6e3YEpPtyEkdzn.jpg',
                'item_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'source' => 'VvSbdNSluryq9ZYk0kzTm9UofbU8w9xbS0tqW8te.jpg',
                'item_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'source' => 'RftfKY1886RD6AcMdi5HRo4Q2FmwhuaKa6oiJute.jpg',
                'item_id' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'source' => '7SwkEtCJoUwUUk3mZGOST2T48zsBuqIHy9mgRloE.jpg',
                'item_id' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'source' => 'Q4N3TaevZbN5bZP7Fv6V63guIaMNw64DJsW1Tfb3.jpg',
                'item_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'source' => 'xGh7x0KNBOTDw5rxi98a1J8ZnMxYLmU7fIj86H01.jpg',
                'item_id' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'source' => 'rF5Rul92c7DJzdIq0G4ltgK3zEbLYsrxISjQGvT1.jpg',
                'item_id' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'source' => 'jWSc9TjCXH40idd2jt6El7VhY2kFdJuPICeTg86H.jpg',
                'item_id' => 16,
            ),
        ));
        
        
    }
}
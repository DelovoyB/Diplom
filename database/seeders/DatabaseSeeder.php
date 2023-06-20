<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        \App\Models\User::factory(5)->create();
//        \App\Models\Item::factory(20)->create();
//        \App\Models\Image::factory(60)->create();
//        \App\Models\Thumbnail::factory(20)->create();
//        \App\Models\User::factory(1)->create([
//            "name" => "Виктор Дроздов",
//            "represents" => "РосАтом",
//            "email" => "erna.nolan@example.net",
//            "password" => bcrypt("password"),
//        ]);
//        \App\Models\AdminUser::factory(1)->create([
//            "name" => "Данила Бендик",
//            "email" => "admin@admin.com",
//            "password" => bcrypt("123456"),
//        ]);
//        \App\Models\Category::factory(1)->create(["category" => "Канальные вентиляторы"]);
//        \App\Models\Category::factory(1)->create(["category" => "Центробежные вентиляторы"]);
//        \App\Models\Category::factory(1)->create(["category" => "Крышные вентиляторы"]);
//        \App\Models\Category::factory(1)->create(["category" => "Мультизональные вентиляторы"]);


        $this->call(AdminUsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ThumbnailsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderedItemsTableSeeder::class);



    }
}

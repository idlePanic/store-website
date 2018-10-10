<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\comment;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory(Product::class,10)->create();
        factory(Comment::class,10)->create();
//         $this->call(UsersTableSeeder::class,
//             CommentsTableSeeder::class);
    }
}

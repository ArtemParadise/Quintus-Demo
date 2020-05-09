<?php

use App\Model\Slider;
use App\Model\ClientsBrandWall;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        factory(Slider::class, 5)->create();
        factory(ClientsBrandWall::class, 8)->create();
        factory(\App\Model\Post::class, 10)->create();
        factory(\App\Model\Category::class, 1)->create();
    }
}

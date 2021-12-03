<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("posts")->insert([
            "title" => $faker->title(),
            "post_text" => $faker->post_text(),
            "user_id" => $faker->user_id(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        DB::table('contacts')->insert([
            'name' => $faker->firstName()
        ]);

        DB::table('contacts')->insert([
            'name' => $faker->firstName()
        ]);

        DB::table('contacts')->insert([
            'name' => $faker->firstName()
        ]);
    }
}

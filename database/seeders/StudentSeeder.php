<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::Create();
        for ($i = 0; $i < 50; $i++){
        	\App\Models\Student::insert([
        		'first_name' 		=> $faker->firstName,
                'last_name' 		=> $faker->lastName,
        		'student_number' 	=> $faker->unique()->randomNumber(6),
        		'classes_id'		=> $faker->numberBetween(1, 12),
        		'user_id'			=> $faker->unique()->numberBetween(26, 75),
                'created_at' 		=> $faker->dateTime,
                'updated_at' 		=> $faker->dateTime
        	]);
        }
    }
}

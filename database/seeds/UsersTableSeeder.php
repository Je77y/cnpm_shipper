<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $current_date = Carbon::now();
        $pass = bcrypt('12345678');
        $areas = array('HN', 'HCM');

        for($i = 0; $i < 10; $i++) {
	        User::create([
	            'name' => $faker->name,
	            'email' => $faker->safeEmail,
	            'password' => $pass,
	            'area' => $areas[rand(0,1)],
	            'accuracy' => rand(0,1),
	            'created_at' => $current_date,
	            'updated_at' => $current_date
	        ]);
    		}
    }
}

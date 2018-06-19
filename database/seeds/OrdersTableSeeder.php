<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Factory as Faker;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
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

        for($i = 0; $i < 500; $i++) {
	        Order::create([
	            'address' => $faker->address,
	            'active' => rand(0,1),
	            'describe' => $faker->text($maxNbChars = 200),
	            'save_order' => 0,
	            'created_at' => $current_date->subMinute(),
	            'updated_at' => $current_date->subMinute()
	        ]);
    		}

    }
}

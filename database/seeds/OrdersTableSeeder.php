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
        $date = Carbon::now();

        for($i = 0; $i < 100; $i++) {
	        Order::create([
	            'address' => $faker->address,
	            'active' => rand(0,1),
	            'describe' => $faker->text($maxNbChars = 200),
	            'save_order' => rand(0,1),
	            'created_at' => $date,
	            'updated_at' => $date
	        ]);
    		}

    }
}

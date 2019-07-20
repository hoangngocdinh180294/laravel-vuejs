<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1,50) as $i){
            Customer::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'company'=>$faker->company,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
            ]);
        }
    }
}

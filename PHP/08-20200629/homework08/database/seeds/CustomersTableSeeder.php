<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $limit = 20;
        for($i=0;$i<$limit;$i++)
        {
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'email' => $faker->freeEmail,
                'password' => Hash::make('password'),
            ]);
        }
       
    }
}

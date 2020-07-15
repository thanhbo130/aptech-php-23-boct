<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name'=>$faker->name(),
            'email'=>$faker->safeEmail(),
            'password'=>bcrypt('abcde')
        ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class Crud_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
       for($i=0;$i<30;$i++){
           DB::table('crud_users')->insert([
               'name'=>$faker->name(),
               'email'=>$faker->safeEmail,
               'password'=>bcrypt('aa11222')
           ]);
       }
    }
}

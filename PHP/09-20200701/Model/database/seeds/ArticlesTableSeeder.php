<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for($i=0;$i<$limit;$i++){
            DB::table('articles')->insert([    //==insert into (articles) value ... in SQL query
                'title'=>$faker->title(),
                'descrription'=>$faker->sentence,
                'content'=>$faker->paragraph
            ]);
        }
    }
}

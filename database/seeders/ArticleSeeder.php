<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach(range(1,10) as $index){
            Article::create([
                'photo'=>$faker->imageURL(1200, 628, 'Scholarship_Articles'),
                'title'=>$faker->sentence(2),
                'description'=>$faker->paragraph,
                'published_at'=>$faker->date,
            ]);
        }
    }
}

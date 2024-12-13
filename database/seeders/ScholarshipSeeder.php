<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Scholarship;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,10) as $index){
            Scholarship::create([
                'photo'=>$faker->imageURL(1200, 628, 'Scholarships'),
                'name'=>$faker->sentence(1),
                'organization_name'=>$faker->sentence(2),
                'description'=>$faker->paragraph,
            ]);
        }
    }
}

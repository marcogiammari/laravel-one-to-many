<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $stacksData = config('store.stacks');


        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->domainName();
            $newProject->description = $faker->paragraphs(5, true);
            $newProject->image = "https://picsum.photos//600/600?random=1" . rand(1, 100);
            $newProject->link = $faker->url();
            $newProject->stack = $stacksData[rand(0, count($stacksData) - 1)];;
            $newProject->save();
        }
    }
}

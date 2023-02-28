<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $new_comic = new Comic();
            $new_comic->title = $faker->firstNameMale();
            $new_comic->description = $faker->text();
            $new_comic->thumb = $faker->imageUrl(640, 480, 'heroes', true);
            $new_comic->price = $faker->randomFloat(2, 1, 90);
            $new_comic->series = $faker->word();
            $new_comic->sale_date = $faker->date();
            $new_comic->type = $faker->word();
            $new_comic->artists = $faker->firstNameMale();
            $new_comic->writers = $faker->firstNameFemale();
            $new_comic->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 50; $i++) {
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time('H:i');
            $train->arrival_time = $faker->time('H:i');
            $train->code = $faker->bothify('??####'); // generates a string where `?` characters are replaced with a random letter, and # characters are replaced with a random digit between 0 and 10.
            $train->number_of_cabs = $faker->numberBetween(1, 10);
            $train->on_time = $this->percentageChance(75);
            $train->cancelled = $this->percentageChance(5);

            $train->save();
        }
    }

    /**
     * Return random True or False, the percentage of returning True is passed as parameter.
     *
     * @param int $percentage The percentage probability of returning True.
     */
    private function percentageChance(int $percentage = 50): bool
    {
        $rand = rand(1, 100);
        return $rand <= $percentage;
    }
}

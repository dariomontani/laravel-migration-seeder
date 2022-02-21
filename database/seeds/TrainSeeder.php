<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $time = [
            '15:00:00', '23:30:00', '17:15:00', '02:30:00', '10:00:00'
        ];

        $city = [
            'Venezia', 'Roma', 'Firenza', 'Verona', 'Napoli', 'Torino', 'Milano', 'Siena'
        ];

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $city[rand(0, 7)];
            $train->arrival_station = $city[rand(0, 7)];
            $train->departure_time = $time[rand(0, 4)];
            $train->arrival_time = $time[rand(0, 4)];
            $train->train_code = $faker->ean8();
            $train->number_of_carriage = $faker->numberBetween(0, 99);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}

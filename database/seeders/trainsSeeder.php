<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         for($i = 0; $i < 100; $i++) {
            $actualTrain = new Train();
            $actualTrain->azienda = $faker->name();
            $actualTrain->stazione_di_partenza = $faker->name();
            $actualTrain->stazione_di_arrivo = $faker->name();
            $actualTrain->orario_partenza = $faker->dateTime();
            $actualTrain->orario_arrivo = $faker->dateTime();
            $actualTrain->codice_treno = $faker->randomNumber(5, true);
            $actualTrain->numero_carrozze = $faker->randomNumber(2, false);
            $actualTrain->in_orario = $faker->boolean();
            $actualTrain->cancellato = $faker->boolean();
            $actualTrain->save();
         }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for( $i = 0; $i < 10; $i++ ) {
            
            $newTrain = new Train();
    
            $newTrain->azienda = $faker->company;
            $newTrain->stazione_di_partenza = $faker->city;
            $newTrain->stazione_di_arrivo = $faker->city;
            $newTrain->orario_di_partenza = $faker->time('H:i:s');
            $newTrain->orario_di_arrivo = $faker->time('H:i:s');
            $newTrain->binario = $faker->numberBetween(1, 20);
            $newTrain->codice_treno = 'TR' . $faker->unique()->numberBetween(10000, 99999);
            $newTrain->totale_carrozze = $faker->numberBetween(5, 15);
            $newTrain->arriva_in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
    
    
            $newTrain->save();

        }
    }
}

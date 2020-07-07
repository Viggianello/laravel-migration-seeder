<?php

use Illuminate\Database\Seeder;// collegamento per i seeder e fare riga 5
use App\actor; // collegare model
use Faker\Generator as Faker;
class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // $dati_attori = config('lista-attori.dati_attori');
        // $dati_attori = [
        //     [
        //         'nome' => 'Brad',
        //         'cognome' => 'Pitt',
        //     ],
        //     [
        //         'nome' => 'Brad',
        //         'cognome' => 'Pitt',
        //     ],
        //     [
        //         'nome' => 'Brad',
        //         'cognome' => 'Pitt',
        //     ]
        // ];
        // foreach ($dati_attori as $actor) {
        //     $newActor = new Actor();
        //     $newActor->firstname = $actor['nome'];
        //     $newActor->secondname = $actor['cognome'];
        //     $newActor->save();
        // }

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newSActor = new Actor();
            $newActor->firstname = $faker->firstName;
            $newActor->secondname = $faker->lastName;
            $newActor->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //array di info dei treni da inserire
        $trains = [
            [
                "azienda" => "trenord",
                "stazione_di_partenza" => "Bergamo",
                "stazione_di_arrivo" => "Milano",
                "partenza" => "2025-07-05 10:00:00",
                "arrivo" => "2025-07-05 11:00:00",
                "codice_treno" => "678678",
                "numero_carrozze" => "9",
                "in_orario" => true,
                "cancellato" => false,
            ],
            [
                "azienda" => "trenord",
                "stazione_di_partenza" => "Bergamo",
                "stazione_di_arrivo" => "Milano",
                "partenza" => "2025-07-06 12:00:00",
                "arrivo" => "2025-07-06 13:00:00",
                "codice_treno" => "678678",
                "numero_carrozze" => "9",
                "in_orario" => true,
                "cancellato" => false,
            ],
            [
                "azienda" => "trenord",
                "stazione_di_partenza" => "Bergamo",
                "stazione_di_arrivo" => "Milano",
                "partenza" => "2025-07-07 15:00:00",
                "arrivo" => "2025-07-07 16:00:00",
                "codice_treno" => "678678",
                "numero_carrozze" => "9",
                "in_orario" => true,
                "cancellato" => false,
            ],
            [
                "azienda" => "trenord",
                "stazione_di_partenza" => "Bergamo",
                "stazione_di_arrivo" => "Milano",
                "partenza" => "2025-07-12 15:00:00",
                "arrivo" => "2025-07-12 16:00:00",
                "codice_treno" => "678678",
                "numero_carrozze" => "9",
                "in_orario" => true,
                "cancellato" => false,
            ]
        ];

        foreach($trains as $train) {

            $newTrain = new Train();

            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->partenza = $train['partenza'];
            $newTrain->arrivo = $train['arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}

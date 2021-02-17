<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Voiture;
use App\Mecanicien;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nom' => 'Jackson',
                'prenom' => 'Lamar',
                'adresse' => '8 rue de la Course',
                'ville' => 'Baltimore',
                'telephone' => '0168793560',
                'email' => 'lamar.jackson@hotmail.fr',
            ],[
                'nom' => 'Brady',
                'prenom' => 'Tom',
                'adresse' => '7 avenue de la Domination',
                'ville' => 'Boston',
                'telephone' => '0796374914',
                'email' => 'brady7rings@gmail.com',
            ],[
                'nom' => 'Mahomes',
                'prenom' => 'Patrick',
                'adresse' => '15 rue Tyrek Hill',
                'ville' => 'Kansas City',
                'telephone' => '0401929499',
                'email' => 'pat.mahomes@chiefs.com',
            ],[
                'nom' => 'Winston',
                'prenom' => 'Jameis',
                'adresse' => '30 rue du Généreux',
                'ville' => 'Tampa Bay',
                'telephone' => '0825182223',
                'email' => 'jwinston@hotmail.fr',
            ],[
                'nom' => 'Rodgers',
                'prenom' => 'Aaron',
                'adresse' => '1 rue Oliver Moon',
                'ville' => 'Point Place',
                'telephone' => '0949431947',
                'email' => 'a-rod-12@gmail.fr',
            ],[
                'nom' => 'Henry',
                'prenom' => 'Derek',
                'adresse' => '95 rue du Buldozer',
                'ville' => 'Tennessee',
                'telephone' => '0926876723',
                'email' => 'henry22@gmail.fr',
            ],[
                'nom' => 'Kuechly',
                'prenom' => 'Luke',
                'adresse' => '59 rue du Retraité',
                'ville' => 'Carolina',
                'telephone' => '0973106509',
                'email' => 'kuechly.luke@hotmail.fr',
            ],
        ];

        foreach ($users as $key => $user) {
            Client::create($user);
        }

        $mecanos = [
            [
                'nom' => 'Belichick',
                'prenom' => 'Bill',
            ],[
                'nom' => 'Harbaugh',
                'prenom' => 'John',
            ],[
                'nom' => 'Reid',
                'prenom' => 'Andy',
            ],[
                'nom' => 'Bruce',
                'prenom' => 'Arians',
            ],
        ];

        foreach ($mecanos as $mecano) {
            Mecanicien::create($mecano);
        }

        $voitures = [
            [
                'marque' => 'Audi',
                'modele' => 'A4',
                'annee' => '2018',
                'immat' => 'AG-574-BT',
                'client_id' => 1,
            ],
            [
                'marque' => 'Peugeot',
                'modele' => '3008',
                'annee' => '2019',
                'immat' => 'RT-419-VF',
                'client_id' => 2,
            ],
            [
                'marque' => 'Audi',
                'modele' => 'A3',
                'annee' => '2017',
                'immat' => 'ST-129-RZ',
                'client_id' => 2,
            ],
            [
                'marque' => 'Cupra',
                'modele' => 'Formentor',
                'annee' => '2020',
                'immat' => 'RY-114-PM',
                'client_id' => 2,
            ],
            [
                'marque' => 'Audi',
                'modele' => 'A1',
                'annee' => '2014',
                'immat' => 'GH-030-LQ',
                'client_id' => 4,
            ],
            [
                'marque' => 'Volkswagen',
                'modele' => 'Passat',
                'annee' => '2016',
                'immat' => 'XY-068-WN',
                'client_id' => 4,
            ],
            [
                'marque' => 'Peugeot',
                'modele' => '208',
                'annee' => '2020',
                'immat' => 'LD-890-TP',
                'client_id' => 5,
            ],
        ];

        foreach ($voitures as $voiture) {
            Voiture::create($voiture);
        }
    }
}

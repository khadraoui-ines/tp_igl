<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\etudiant::create(
[
    'id'=>'3',
    'matricule'=>'17/0011',
    'lieu_naissance'=>'blida',
    'date_naissance'=>'1999-12-12',
    'groupe'=>'1cp9',
]
        );
    }
}

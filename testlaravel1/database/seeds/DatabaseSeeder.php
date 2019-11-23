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
        // $this->call(UsersTableSeeder::class);
        App\etudiant::create(

            [
                'id' => '3',
                'matricule' => '17/200',
                'date_naissance'=>'2000-5-21',
                'lieu_naissance'=>'blida',
                'groupe'=>'6',

            ]
        );
    }
}

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

        App\User::create(
            [
                'name' => '17/009',
                'email' => 'dupont.fr',
                'password' => bcrypt('ass'),
            ]
        );


        // $this->call(UsersTableSeeder::class);
    }
}

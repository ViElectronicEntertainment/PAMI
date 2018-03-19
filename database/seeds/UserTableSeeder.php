<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
        	'name' => 'Sergio Veloza',
        	'email' => 'velozasergio@gmail.com',
        	'password' => bcrypt('123')
        ]);
    }
}

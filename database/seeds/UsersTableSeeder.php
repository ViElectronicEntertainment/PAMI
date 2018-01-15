<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(pami\User::class, 29)->create();
        pami\User::create([
        	'name' => 'Sergio Veloza',
        	'email' => 'velozasergio@gmail.com',
        	'password' => bcrypt('jpZr7DRZ'),
            'leadership' => rand(1,10),
            'innovation' => rand(1,10),
            'teamwork' => rand(1,10),
            'management' => rand(1,10),
            'design' => rand(1,10),
            'development' => rand(1,10),
            'problemresolution' => rand(1,10),
            'sales' => rand(1,10),
            'communication' => rand(1,10),
            'community' => rand(1,10),
            'level' => rand(1,10),
            'experience' => rand(1,10),   
            ]);
    }
}

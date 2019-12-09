<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = User::create([
        	'name' => 'User1',
        	'email' => 'user@example.com',
            'password' => bcrypt('secret')
    	]);
        $user = User::create([
        	'name' => 'User1',
        	'email' => 'user@example.com',
            'password' => bcrypt('secret')
    	]);
    }
}

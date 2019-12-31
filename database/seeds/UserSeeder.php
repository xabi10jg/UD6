1234
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
        	'name' => 'admin',
        	'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
            'role_id' => 1
        ]);
        
        $user = User::create([
        	'name' => 'editor',
        	'email' => 'editor@example.com',
            'password' => bcrypt('secret'),
            'role_id' => 2
    	]);
        
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
        	'name'=>'Super',
			'email'=>'super@gmail.com',
			'password'=>bcrypt('password'),
			'role'=>'super admin',
        ]);    

         User::create([
        	'name'=>'Admin',
			'email'=>'admin@gmail.com',
			'password'=>bcrypt('password'),
			'role'=>'admin',
        ]);    
    }
}

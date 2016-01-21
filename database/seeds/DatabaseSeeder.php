<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        
        DB::table('users')->insert([
		        'name' => 'admin',
		        'email' => 'admin@gmail.com',
		        'password' => md5('admin'),
        ]);

        Model::reguard();
    }
}

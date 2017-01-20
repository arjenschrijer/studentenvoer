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
        DB::table('users')->insert([
            'name' => 'Arjen Schrijer',
            'email' => 'arjenschrijer@gmail.com',
            'password' => bcrypt('Test123.'),
        ]);
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('Test123.'),
        ]);
    }
}

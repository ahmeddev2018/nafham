<?php

use App\User;
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
        //
        $admin = User::create([

            'name'=> 'Administrator',
            'email'=> 'admin@admin.com',
            'password' =>bcrypt('password'),

        ]);
    }
}

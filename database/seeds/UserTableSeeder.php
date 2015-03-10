<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name'     => 'Max Mustermann',
            'username' => 'max',
            'email'    => 'test@sgottschall.de',
            'password' => Hash::make('mypass'),
        ));
    }
}
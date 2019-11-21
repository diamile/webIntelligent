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
        DB::Table('users')->insert([
            'name' => 'Diamile',
            'email' => 'diamilesarr2006@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => 1
        ]);
    }
}

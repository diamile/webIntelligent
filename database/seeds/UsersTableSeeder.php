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
            'phone'=>'0752823958',
            'password' => Hash::make('admin'),
            'is_admin'=>1,
            
        ]);
    }
}

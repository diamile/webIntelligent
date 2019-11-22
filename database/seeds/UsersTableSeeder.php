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
        $users = factory(App\User::class, 10)->create();
        
        DB::Table('users')->insert([
            'name' => 'Diamile',
            'email' => 'diamilesarr2006@gmail.com',
            'phone'=>'0752823958',
            'password' => Hash::make('admin'),
            'is_admin'=>1,
            'adresse'=>'10 rue langueDoc',
            'lastName'=>'sada',
            'commentaires'=>'hello mister sarr',
            'postale'=>'95300',
            'ville'=>'paris'
            
        ]);
    }
}

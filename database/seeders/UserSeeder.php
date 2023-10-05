<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()
    {
        $users = [
            [
               'name'=>'Saya Admin',
               'username'=>'admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('1234567890'),
            ],
            [
               'name'=>'Saya User',
               'username'=>'user',
               'email'=>'user@gmail.com',
               'type'=>0,
               'password'=> bcrypt('1234567890'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
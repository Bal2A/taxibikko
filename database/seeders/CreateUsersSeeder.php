<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
               'name'=>'Bah Admin User',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('224'),
            ],
            [
               'name'=>'Bah Manager User',
               'email'=>'chauffeur@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('224'),
            ],
            [
               'name'=>'Bah User',
               'email'=>'user@gmail.com',
               'type'=>0,
               'password'=> bcrypt('224'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

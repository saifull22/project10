<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

User::create([

    'name'=>'admin',

    'email'=>'saiful@gmail.com',
 'password'=>bcrypt('12345'),

    'role'=>'admin',
    
]);

    }
}

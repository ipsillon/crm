<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id'=> 1], [
        'name'=>'Fernando',
        'email'=>'fernando@ipsillon.cc',
        'password'=> '$2y$10$n1UgNtxXazQy22MSMo03Meh5G2DA7zZ7w94mZe8PI07GVZajHk8o6'//password 123456
        ]);
    }
}

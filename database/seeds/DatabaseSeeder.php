<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nam',
            'email' => 'namnh.developer@gmail.com',
            'password' => bcrypt(123),
        ]);
    }
}
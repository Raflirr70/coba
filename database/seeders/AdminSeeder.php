<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'firstname'=>'ad',
            'last_name'=>'min',
            'email'=>'admin@gmail.com',
            'homebase'=>1
        ]);
    }
}

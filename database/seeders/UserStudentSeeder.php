<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            // Membuat user mahasiswa
            $user = User::create([
                'name' => $faker->name,
                'firstname' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => 'password', // Ganti password sesuai kebutuhan
                'homebase' => random_int(1,3), // Misalnya homebase diisi dengan nilai 1
            ]);
            Student::create([
                'user_id' => $user->id,
                'entry_year' => random_int(2023,2024),
                'group'=>random_int(10,20),
                'is_active'=>true
            ]);
            
        }
    }
}

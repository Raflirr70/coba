<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

$users = DB::table('users')->get();  // Menggunakan query builder


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        User::factory()->create([
            'name' => 'student',
            'email' => 'student@example.com',
        ]);

        $this->call([
            DepartementSeeder::class,
            Roleseeder::class,
            UserStudentSeeder::class
            // Seeder lainnya bisa ditambahkan di sini
        ]);
    }
}

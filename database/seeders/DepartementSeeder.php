<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    
    public function run(): void
    {
        Departement::create([
            'name'=>'Teknik Informatika',
            'code'=>'55201',
            'Alias'=>'IF'
        ]);
        Departement::create([
            'name'=>'Teknik Sipil',
            'code'=>'22201',
            'Alias'=>'SI'
        ]);
        Departement::create([
            'name'=>'Teknik Industri',
            'code'=>'26201',
            'Alias'=>'TI'
        ]);
    }
}

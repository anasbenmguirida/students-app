<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class ensmatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
            'libelle' => 'OPP en Cpp',
            'id_ens' => 11 , 
            ],

            [
            'libelle' => 'Linux',
            'id_ens' => 12, 
            ], 
        
            [
            'libelle' => 'Electronique numerique',
            'id_ens' => 10 , 
            ], 
        ];
        DB::table('matieres')->insert($data);
    }
}

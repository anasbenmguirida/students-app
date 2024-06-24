<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant ; 
use Illuminate\Support\Facades\Hash; 

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Etudiant::create([
            'nom'=>'benmguirida' , 
            'prenom'=>'anas' , 
            'email'=>'benmguiridaanas@gmail.com' ,
            'password'=>hash::make('mamanouzha22') , 
            'role'=>'admin',
        ]);
    }
}

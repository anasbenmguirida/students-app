<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;

class ProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etudiant::create([
            'nom'=>'prof' , 
            'prenom'=>'professeur' , 
            'email'=>'professeur@gmail.com' ,
            'password'=>hash::make('12345678') , 
            'role'=>'prof',
        ]);
    }
}

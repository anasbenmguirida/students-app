<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash ; 
use Illuminate\Support\Facades\DB; 

class YourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
            'name' => 'benmguirida',
            'prenom' => 'issam',
            'email' => 'issam@gmail.com',
            'password' => Hash::make('12345678'),
            'role'=>'prof' ,  
            ],

            [
            'name' => 'benmguirida',
            'prenom' => 'anas',
            'email' => 'anasben@gmail.com',
            'password' => Hash::make('12345678'),
            'role'=>'prof' ,  
            ], 
        
            [
                'name' => 'berkani',
                'prenom' => 'amine',
                'email' => 'berkani@gmail.com',
                'password' => Hash::make('12345678'),
                'role'=>'prof' ,  
            ], 
        ];
        DB::table('users')->insert($data);
    }
}

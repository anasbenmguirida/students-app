<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable ; 
use Illuminate\Notifications\Notifiable ; 
use Laravel\Sanctum\Contracts\HasApiTokens ; 

class Groupe extends Model
{
    use  HasFactory;
    protected $fillable = [
        'nom_grp',
        'id_etu'
    ];
}

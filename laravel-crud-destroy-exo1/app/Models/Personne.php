<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $table ="personnes";

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'age',
        'date',
        'genre',
    ];

    protected $hidden =[
        'id',
        'nom',
        'prenom',
        'age',
        'date',
        'genre',
        
    ];
}

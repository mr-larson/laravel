<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    protected $table ="eleves";

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'age',
        'date',
        'genre',
    ];
}

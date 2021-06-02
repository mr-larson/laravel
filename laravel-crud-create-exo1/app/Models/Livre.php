<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $table ="livres";

    protected $fillable = [
        'id',
        'titre',
        'auteur',
        'date',
        'page',
        'mobile',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotheque extends Model
{
    use HasFactory;
    protected $table ="bibliotheques";

    protected $fillable = [
        'id',
        'nom',
        'address',
        'phone',
    ];
}

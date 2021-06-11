<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = "equipes";

    protected $fillable = [
        "club",
        "ville",
        "pays",
        "max_joueurs",
        "att",
        "mc",
        "df",
        "rc",
        "continent_id",
    ];

    public function continent(){
        return $this->belongsTo(Continent::class);
    }
    
    public function joueurs(){
        return $this->hasMany(Joueur::class);
    }
}

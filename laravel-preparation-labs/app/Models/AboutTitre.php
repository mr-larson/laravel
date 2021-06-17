<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTitre extends Model
{
    use HasFactory;
    protected $table = "about_titres";

    protected $fillable = [
        "h3",
        "p",
    ];
}

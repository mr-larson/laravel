<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = "features";

    protected $fillable = [
        "h3",
        "i",
        "p",
        "li1",
        "li2",
        "li3",
    ];
}

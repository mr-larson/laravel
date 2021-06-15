<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutText extends Model
{
    use HasFactory;
    protected $table = "about_texts";

    protected $fillable = [
        "icon",
        "h4",
        "p",
    ];
}

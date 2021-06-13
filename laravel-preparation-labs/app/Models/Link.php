<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = "links";

    protected $fillable = [
        "h4",
        "li1",
        "li2",
        "li3",
        "li4",
        "li5",
    ];
}

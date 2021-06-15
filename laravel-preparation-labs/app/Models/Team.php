<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = "teams";

    protected $fillable = [
        "photo",
        "twitter",
        "facebook",
        "insta",
        "link",
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}

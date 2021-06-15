<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = "users";

    protected $fillable = [
        "nom",
        "email",
        "password",
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function team(){
        return $this->hasOne(Team::class);
    }
}

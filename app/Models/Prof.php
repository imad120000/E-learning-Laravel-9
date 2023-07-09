<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prof extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'tele',
        'naissance',
        'email',
        'password',
        'image',
    ];

    public function course(){
        return $this->hasMany(cours::class);
    }

    public function meets(){
        return $this->belongsTo(meet::class);
    }
}

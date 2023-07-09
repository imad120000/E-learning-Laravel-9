<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class etd extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'tele',
        'date',
        'adress',
        'email',
        'password',
        'image'
    ];

    public function demandecours(){
        return $this->hasMany(demandecours::class);
    }
}

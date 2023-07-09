<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'des',
        'video',
        'image',
        'profs_id',
        'niveau', 
        'categorie', 
    ];
    
    public function prof(){
        return $this->belongsTo(Prof::class);
    }

    public function demandecours(){
        return $this->hasMany(demandecours::class);
    }
}

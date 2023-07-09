<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class meet extends Model
{
    use HasFactory;
    protected $fillable = [
        'meet_title',
        'target_niveau',
        'target_cours',
        'meet_date',
        'profs_id',
        'jitsi_meet_url',
    ];

    public function prof(){
        return $this->hasMany(Prof::class);
    }

  
}

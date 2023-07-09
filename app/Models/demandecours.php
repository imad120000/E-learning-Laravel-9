<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandecours extends Model
{
    use HasFactory;

    protected $fillable = [
      'etds_id',
      'cours_id',
      'status',
      
  ];

    public function etd(){
        return $this->belongsTo(etd::class);
     }
     
     public function cours(){
        return $this->belongsTo(cours::class);
     }
}

<?php

namespace App\Domains\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'device_name',
        'device_model',
        'serial_number',
        'front_image',
        'back_image',
        'cover_image',
        'comments',
        'sim_card',
        'charger',
        'handfree',
        'box',
        
    ];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['front_image'] = json_encode($value);
    }
  
}

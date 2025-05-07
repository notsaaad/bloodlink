<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulancecar extends Model
{
    use HasFactory;

    protected $table = 'ambulancecars';
    protected $primaryKey = 'license_number'; 
    public    $incrementing = false;
    protected $keyType = 'string';
    public    $timestamps = false;

    protected $fillable = [
      'license_number',
      'car_model',
      'working_hours',
    ];

}

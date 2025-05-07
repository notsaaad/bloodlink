<?php

namespace App\Models;

use App\Models\Bloodbank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;
    protected $table = "hospitals";
    protected $primaryKey = 'hospital_id';
    public $timestamps = false;
    protected $fillable = [
      'hospital_id',
      'name',
      'address',
      'checkup_result',
    ];


    public function bloodbanks()
    {
        return $this->hasMany(Bloodbank::class, 'hospital_id');
    }
}

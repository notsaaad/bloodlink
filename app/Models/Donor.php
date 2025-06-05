<?php

namespace App\Models;

use App\Models\Bloodbank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donor extends Model
{
    use HasFactory;
    protected $table = "donors";
    public $timestamps = false;
    protected $fillable = [
      'id',
      'first_name',
      'last_name',
      'national_id',
      'phone_number',
      'blood_type',
      'birth_date',
      'address',
      'gender',
      'passowrd'
    ];

    public function bloodbanks()
    {
        return $this->belongsToMany(Bloodbank::class, 'bloodbanks_donors', 'donor_id', 'bloodbank_id');
    }

}

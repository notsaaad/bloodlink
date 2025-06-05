<?php

namespace App\Models;

use App\Models\Bloodbank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'password',
        'blood_type',
        'birth_date',
        'address',
        'gender',
    ];
    public function bloodbanks()
    {
        return $this->belongsToMany(Bloodbank::class, 'bloodbanks_patients', 'patient_id', 'bloodbank_id');
    }
}

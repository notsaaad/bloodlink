<?php

namespace App\Models;

use App\Models\Donor;
use App\Models\Patient;
use App\Models\Hospital;
use App\Models\BloodbankManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bloodbank extends Model
{
    use HasFactory;

    protected $table = 'bloodbanks';
    protected $primaryKey = 'bloodbank_id';
    public $timestamps = false;

    protected $fillable = [
        'bloodbank_id ',
        'name',
        'address',
        'blood_quantity',
        'phone',
        'promotions',
        'feedback',
        'license_number',
        'hospital_id',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }


    public function donors()
    {
        return $this->belongsToMany(Donor::class, 'bloodbanks_donors', 'bloodbank_id', 'donor_id');
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'bloodbanks_patients', 'bloodbank_id', 'patient_id');
    }

    public function managers()
{
    return $this->hasMany(BloodbankManager::class, 'bloodbank_id');
}

}

<?php

namespace App\Models;

use App\Models\Bloodbank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodbankManager extends Model
{
    use HasFactory;

    protected $table = 'bloodbank_managers';

protected $primaryKey = 'manager_id';

public $timestamps = false;

protected $fillable = [
    'manager_id',
    'name',
    'national_id',
    'email',
    'password',
    'bloodbank_id',
  ];


  public function bloodbank()
{
    return $this->belongsTo(Bloodbank::class, 'bloodbank_id');
}

}

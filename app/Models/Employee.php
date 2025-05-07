<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey = "emp_id";
    public $timestamps = false;
    protected $fillable = [
      'emp_id',
      'emp_name',
      'phone',
      'address',
      'job_title',
      'bloodbank_id',
    ];
}

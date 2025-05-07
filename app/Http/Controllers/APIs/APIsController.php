<?php

namespace App\Http\Controllers\APIs;

use App\Models\Donor;
use App\Models\Patient;
use App\Models\Employee;
use App\Models\Hospital;
use App\Models\Bloodbank;
use App\Models\Ambulancecar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIsController extends Controller
{
  function ambulancecars(){
    $Ambulancecar = Ambulancecar::get();
    return response()->json($Ambulancecar);
  }

  function bloodbanks(){
    $bloodbanks = Bloodbank::get();
    return response()->json($bloodbanks);
  }

  function Donor(){
    $Donor = Donor::get();
    return response()->json($Donor);
  }
  function Employee(){
    $Employee = Employee::get();
    return response()->json($Employee);
  }
  function Hospital(){
    $Hospital = Hospital::get();
    return response()->json($Hospital);
  }
  function Patient(){
    $Patient = Patient::get();
    return response()->json($Patient);
  }
}

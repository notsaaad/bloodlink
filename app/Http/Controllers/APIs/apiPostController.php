<?php

namespace App\Http\Controllers\APIs;

use App\Models\Donor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\BloodbankManager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class apiPostController extends Controller
{
  function postDonors(Request $request){
  $validated = $request->validate([
      'first_name'   => 'required|string|max:50',
      'last_name'    => 'required|string|max:50',
      'national_id'  => 'required|string|unique:donors,national_id',
      'phone_number' => 'required|string|max:15',
      'blood_type'   => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
      'birth_date'   => 'required|date',
      'address'      => 'required|string|max:100',
      'gender'       => 'required|string',
      'password'     => 'required|string|min:8|confirmed',
  ]);
    $validated['password'] = bcrypt($validated['password']);

      $Donor = Donor::create($request->all());
      return response()->json(['message' => 'Donor created successfully', 'data' => $Donor], 201);
  }

  function postPatient(Request $request){
  $validated = $request->validate([
      'first_name'   => 'required|string|max:50',
      'last_name'    => 'required|string|max:50',
      'national_id'  => 'required|string|unique:patients,national_id',
      'phone_number' => 'required|string|max:15',
      'blood_type'   => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
      'birth_date'   => 'required|date',
      'address'      => 'required|string|max:100',
      'gender'       => 'required|string',
      'password'     => 'required|string|min:8|confirmed',
  ]);
    $validated['password'] = bcrypt($validated['password']);

      $Patient = Patient::create($request->all());
      return response()->json(['message' => 'Donor created successfully', 'data' => $Patient], 201);
  }


  function BankManagers(Request $request){
    $validated = $request->validate([
      'name'         => 'required',
      'national_id'  => 'required|unique:bloodbank_managers,national_id',
      'password'     => 'required|string|min:8|confirmed',
      'email'        => 'required',
      'bloodbank_id' => 'required'
  ]);
    $validated['password'] = bcrypt($validated['password']);

      $BloodbankManager = BloodbankManager::create($request->all());
      return response()->json(['message' => 'Bank Manager created successfully', 'data' => $BloodbankManager], 201);
  }
}

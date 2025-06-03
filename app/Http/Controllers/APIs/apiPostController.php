<?php

namespace App\Http\Controllers\APIs;

use App\Models\Donor;
use Illuminate\Http\Request;
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
  ]);

      // if ($validated->fails()) {
      //     return response()->json(['errors' => $validated->errors()], 422);
      // }

      $Donor = Donor::create($request->all());
      return response()->json(['message' => 'Donor created successfully', 'data' => $Donor], 201);
  }
}

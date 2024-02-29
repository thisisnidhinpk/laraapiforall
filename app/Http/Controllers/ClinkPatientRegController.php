<?php

namespace App\Http\Controllers;

use App\Models\tbl_ClinkPatientReg;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class ClinkPatientRegController extends Controller
{
    //

    public function store(Request $request)
{
    // $validatedData = $request->validate([
    //     'P_name' => 'required|string|max:255',
    //     'P_address' => 'required|string|max:255',
    //     'P_place' => 'required|string|max:255',
    //     'P_dob' => 'required|date',
    //     'P_age'=> 'required|integer',
    //     'P_gender'=> 'required|string|max:255',
    //     'P_regdate' => 'required|date',

    // ]);

    // Get the contents of the image file
    //$imageData = file_get_contents($request->file('prof_pic')->getRealPath());
    //$validatedData['prof_pic'] = $imageData;
    // Hash the password before storing it in the database
    //$validatedData['password'] = bcrypt($validatedData['password']);
    

    // Create a new student with the hashed password
    $patientReg = tbl_ClinkPatientReg::create($request->all());
    // if($patientReg)
    //    {
    //        return response()->json([
    //            'status'=>200,
    //            'dta'=>'Data added success'
    //        ],200);
    //    }
    //    else{
    //        return response()->json([
    //            'status'=>500,
    //            'dta'=>'Insersion failed'
    //        ],500);
    //     }
    return response()->json($patientReg, 201);
}
}

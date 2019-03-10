<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalSystemController extends Controller
{
    public function getDoctorList()
	{
		$hospital_doctors = $hospital_doctors = \App\Hospital::get();
		return response()->json($get_hospital_info);
	}


}

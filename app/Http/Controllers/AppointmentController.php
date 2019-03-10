<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Validator;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function addAppointment(Request $request){
    	$addApp = array(
		    'firstname' => 'required',
		    'lastname' => 'required',
		    'city' => 'required',
		    'street' => 'required',
		    'zip_code' => 'required',
		    'mobile_number' => 'required',
		    'birthdate' => 'required',
		    'gender' => 'required',
		    'height' => 'required',
		    'weight' => 'required',
		    'bloodtype' => 'required',
		    'set_date' => 'required',
		    'set_time' => 'required',
		    'medical_notes' => 'required'
		);

		$validation = Validator::make($request->all(), $addApp);

		if($validation->passes()) 
		{	   
			$appointment = new \App\Appointment;
			$appointment->doctor_id = $request->doctorid;
			$appointment->user_id = Auth::user()->id;
			$appointment->firstname = $request->firstname;
			$appointment->lastname = $request->lastname;
			$appointment->city = $request->city;
			$appointment->street = $request->street;	
			$appointment->zip_code = $request->zip_code;	
			$appointment->mobile_number = $request->mobile_number;
			$appointment->birthdate = $request->birthdate;
			$appointment->gender = $request->gender;
			$appointment->height = $request->height;
			$appointment->weight = $request->weight;
			$appointment->bloodtype = $request->bloodtype;
			$appointment->set_date = $request->set_date;
			$appointment->set_time = $request->set_time;
			$appointment->medical_notes = $request->medical_notes;	    
		    $appointment->save();

		    // Add history
		    $history = new \App\History;
		    $history->action = 'added new appointment';
		    $history->added_by = Auth::user()->id;
		    $history->save();

		    $return['success'] = true;	
		    return $return;
		}
		else
		{
		    $return['errors'] = $validation->errors();
		    return $return;
		}
    }
}

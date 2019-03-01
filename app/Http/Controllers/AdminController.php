<?php

namespace App\Http\Controllers;

use DataTables;
use Auth;
use Image;
use Validator;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

	//Add Station Function
	public function addNewStation(Request $request)
	{		
		$rules = array(
		    'name' => 'required',
		    'state' => 'required',
		    'city' => 'required',
		    'street' => 'required',
		    'file_path' => 'required'
		);

		$validation = Validator::make($request->all(), $rules);

		if($validation->passes()) 
		{	   
			$add = new \App\police_station;
			$add->name_of_station = $request->name;
			$add->state = $request->state;
			$add->city = $request->city;
			$add->street = $request->street;
			$add->zip = $request->zip;		
			
		    if (isset($request->file_path)) {
		        $imgname = str_random(20) . time() . '.jpg';
		        $base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
		       	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64)); // functional	
		       	$add->file_path = '/uploads/' . $imgname;	       	
		    }	    
		    $add->save();

		    // Add history
		    $history = new \App\History;
		    $history->action = 'added_new_police_station';
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

	public function getListStation()
	{
		$police = \App\police_station::get();
		return \DataTables::of($police)->make(true);
	}
	
	public function getPoliceInfo()
	{
		$police_info = $police = \App\police_station::get();
		return response()->json($police);
	}

	public function submitStationReport($station_id)
	{
		$station = \App\police_station::whereId((int)$station_id)->get();
		return view('pages.security_report_type', compact('station'));
	}

	public function submitIncidentsReport(Request $request)
	{
		$incidents = new \App\Report;
		$incidents->user_id = Auth::user()->id;
		$incidents->police_station_id = $request->station_id;
		$incidents->incidents = $request->incidents;
		$incidents->save();
		return response()->json(['success' => true]);
	}





	public function addNewHospitals(Request $request)
	{		
		$rules = array(
		    'name' => 'required',
		    'city' => 'required',
		    'street' => 'required',
		    'file_path' => 'required'
		);

		$validation = Validator::make($request->all(), $rules);

		if($validation->passes()) 
		{	   
			$add = new \App\Hospital;
			$add->name = $request->name;
			$add->city = $request->city;
			$add->street = $request->street;
			$add->zip = $request->zip;		
			
		    if (isset($request->file_path)) {
		        $imgname = str_random(20) . time() . '.jpg';
		        $base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
		       	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64)); // functional	
		       	$add->file_path = '/uploads/' . $imgname;	       	
		    }	    
		    $add->save();

		    // Add history
		    $history = new \App\History;
		    $history->action = 'added_new_hospital';
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


	public function getListHospitals()
	{
		$hospital = \App\Hospital::get();
		return \DataTables::of($hospital)->make(true);
	}

	public function getHospitalInfo()
	{
		$hospital_info = $get_hospital_info = \App\Hospital::get();
		return response()->json($get_hospital_info);
	}

	//DOCTORS
	public function addNewDoctors(Request $request)
	{		
		$rules = array(
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'user_type' => 'required',
		    'doc_hospital_id' => 'required',
		    'email' => 'required',
		    'file_path' => 'required'
		);

		$validation = Validator::make($request->all(), $rules);

		if($validation->passes()) 
		{	   
			$doctor = new \App\User;
			$doctor->first_name = $request->first_name;
			$doctor->last_name = $request->last_name;
			$doctor->user_type = $request->user_type;
			$doctor->name = $request->first_name.' '.$request->last_name;
			$doctor->doc_hospital_id = $request->doc_hospital_id;	
			$doctor->email = $request->email;	
			
		    if (isset($request->file_path)) {
		        $imgname = str_random(20) . time() . '.jpg';
		        $base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
		       	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64)); // functional	
		       	$doctor->file_path = '/uploads/' . $imgname;	       	
		    }	    
		    $doctor->save();

		    // Add history
		    $history = new \App\History;
		    $history->action = 'added_new_doctor';
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

	public function getDoctorList($doctor_id)
	{
		$doctor_list = \App\User::whereDocHospitalId($doctor_id)->get();
		return view('pages\doctor_list', compact('doctor_list'));
	}

	public function getDoctorInfo($doctor_id)
	{
		$doctor_info = \App\User::find($doctor_id);
		return view('pages\doctor_profile', compact('doctor_info'));
	}

	public function getDoctorIdAppointment($doctor_id_appoint)
	{
		$doctor_appointment = \App\User::find($doctor_id_appoint);
		return view('pages\doctor_appointment', compact('doctor_appointment'));
	}

}

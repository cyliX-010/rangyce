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
		    if (isset($request->file_path)) {
		        $imgname = str_random(20) . time() . '.jpg';
		        $base64 = substr($request->image, strpos($request->file_path, ',')+1);
		       	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64));		       	
		    }

		    $add = new \App\police_station;
		    $add->name_of_station = $request->name;
		    $add->state = $request->state;
		    $add->city = $request->city;
		    $add->street = $request->street;
		    $add->zip = $request->zip;
		    $add->file_path = '/uploads/' . $imgname;
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

		// try {
		// 	$add = new \App\police_station;
		// 	$add->name_of_station = $request->name;
		// 	$add->state = $request->state;
		// 	$add->city = $request->city;
		// 	$add->street = $request->street;
		// 	$add->zip = $request->zip;
			
		// 	$imgname = str_random(20) . time() . '.jpg';
		// 	$base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
		// 	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64));

		// 	$add->file_path = '/uploads/' . $imgname;			
		// 	$add->save();

		// 	// Add history
		// 	$history = new \App\History;
		// 	$history->action = 'added_new_police_station';
		// 	$history->added_by = Auth::user()->id;
		// 	$history->save();

		//   	return response()->json(['succes' => true, 'message' => 'Successfully Added']);
		// }
		// catch (\Exception $e) {
		//     return $e->getMessage();
		// }	
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
		return response()->json(['succes' => true]);
	}
}

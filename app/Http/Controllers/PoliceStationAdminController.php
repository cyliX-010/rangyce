<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Image;
use File;
use Auth;

class PoliceStationAdminController extends Controller
{
    public function getStationInfo(){

    	$police_info = $police = \App\police_station::get();
		return response()->json($police);
    }

    public function getListReports()
	{
		$reports = \App\Report::with('user')->get();
		return \DataTables::of($reports)->make(true);
	}

	public function UpdateReports(Request $request)
	{
		$reports = \App\Report::whereId($request->report_id)->update([ 'status' => $request->type ]);
		return response()->json(['success' => true]);
	}

	public function UpdateStationInfo(Request $request)
	{
		if(\App\police_station::find($request->station_id)->file_path === $request->file_path)
			$update_station_info = \App\police_station::whereId($request->station_id)
										->update([ 	'name_of_station' => $request->name_of_station,
													'description' => $request->description,
													'city' => $request->city,
													'street' => $request->street,
													'zip' => $request->zip,
													 ]);  
		else
			if (isset($request->file_path)) {
			    $imgname = str_random(20) . time() . '.jpg';
			    $base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
			   	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64)); // functional	
			   	$image = '/uploads/' . $imgname;	

			   	$update_station_info = \App\police_station::whereId($request->station_id)
			   								->update([ 	'name_of_station' => $request->name_of_station,
			   											'description' => $request->description,
			   											'city' => $request->city,
			   											'street' => $request->street,
			   											'zip' => $request->zip,
			   											'file_path' => $image
			   											 ]);    	
			}
		return response()->json(['success' => true]);
	}


	public function UpdateManagerInfo(Request $request)
	{
		if(\App\User::find($request->user_id)->file_path === $request->file_path){
			$update_owner_info = \App\User::whereId($request->user_id)
										->update([ 	'first_name' => $request->first_name,
													'last_name' => $request->last_name,
													'birthdate' => $request->birthdate,
													'gender' => $request->gender,
													'mobile_number' => $request->mobile_number,
													'city' => $request->city,
													'street' => $request->street,
													'zip_code' => $request->zip_code,
												]);  
		}
		else{
			if (isset($request->file_path)) {
			    $imgOwner = str_random(20) . time() . '.jpg';
			    $base64 = substr($request->file_path, strpos($request->file_path, ',')+1);
			   	file_put_contents(public_path() . '/uploads/' . $imgOwner, base64_decode($base64)); // functional	
			   	$imagegetOwner = '/uploads/' . $imgOwner;	

			   	$update_station_info = \App\User::whereId($request->user_id)
			   								->update([ 	'first_name' => $request->first_name,
														'last_name' => $request->last_name,
														'birthdate' => $request->birthdate,
														'gender' => $request->gender,
														'mobile_number' => $request->mobile_number,
														'city' => $request->city,
														'street' => $request->street,
														'zip_code' => $request->zip_code,
														'file_path' => $imagegetOwner
			   										]);    	
			}
		}
		return response()->json(['success' => true]);
	}
}

// \App\Report::whereId(1)->update([ 'status' => 1 ]);
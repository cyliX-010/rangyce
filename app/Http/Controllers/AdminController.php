<?php

namespace App\Http\Controllers;

use DataTables;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function addNewStation(Request $request)
	{		
		try {
			// Add new Police Station
			$add = new \App\police_station;
			$add->name_of_station = $request->name;
			$add->state = $request->state;
			$add->city = $request->city;
			$add->street = $request->street;
			$add->zip = $request->zip;
			$add->save();

			// Add history
			$history = new \App\History;
			$history->action = 'added_new_police_station';
			$history->added_by = Auth::user()->id;
			$history->save();

		  	return response()->json(['succes' => true, 'message' => 'Successfully Added']);
		}
		catch (\Exception $e) {
		    return $e->getMessage();
		}	
	}

	public function getListStation()
	{
		$police = \App\police_station::get();
		return \DataTables::of($police)->make(true);
		// dd($police);
	}
}

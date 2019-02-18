<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    // public function submitReport(Request $request)
    // {
    // 	$reports = new \App\Report;
    // 	$reports->user_id = $request->user_id;
    // 	$reports->police_station_id = $request->police_station_id;
    // 	$reports->incidents = $request->incidents;
    // 	$reports->save();

    // 	return ['success' => true];
    // }

    public function getReport()
    {
    	$reports = \App\Report::with('user')->get();
    	dd($reports);
    }

    public function submitReport(Request $request)
    {
        $reports = new \App\SecurityServices;
        $reports->station_id = $request->station_id;
        $reports->reporter_id = $request->reporter_id;       
        $reports->type = $request->type;
        $reports->location = $request->location;
        $reports->save();

        return ['success' => true];
    }
}

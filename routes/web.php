<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Links
/*Route::get('/rangyce', function () {
    return view('welcome');
});*/



/*FOR CLIENT USERS*/




//Login Account Link
Route::get('/register', function () {
    return view('auth\register');
});

Route::post('/logout', function () {
    return view('auth\login');
});

//Create Account Link
Route::get('/login', function () {
    return view('auth\login');
});

// Pages
Route::get('/page/notification', function () {
    return view('pages\notification');
});

Route::get('/page/chat', function () {
    return view('pages\chat');
});
Route::get('/page/profile', function () {
    return view('pages\profile');
});
Route::get('/page/feeds', function () {
    return view('pages\feeds');
});

Route::get('/page/services', function () {
    return view('pages\services');
});
//Stations LInk
Route::get('/page/security_stations', function () {
    return view('pages\security_stations');
});

// Route::get('/page/security_report_type/{id}', function () {
//     return view('pages\security_report_type');
// });

//Hospital Link
Route::get('/page/hospitals', function () {
    return view('pages\hospital_list');
});

Route::get('/page/doctor', function () {
    return view('pages\doctor_list');
});



Route::get('/page/doctor_profile', function () {
    return view('pages\doctor_profile');
});



//HOME SERVICES
Route::get('/page/homeservices', function () {
    return view('pages\home_role');
});

Route::get('/page/home_wantTowork', function () {
    return view('pages\home_wantTowork');
});






//HOME Admin Link
Route::get('/adminSide/home', function () {
    return view('administration\index');
});

Route::get('/adminSide/hospitals', function () {
    return view('administration\admin_hospital');
});

// Route::get('/adminSide/add_station', function () {
//     return view('administration\addStation');
// });



//POLICE STATION
Route::post('add/new/station', ['uses' => 'AdminController@addNewStation'])->name('add_new_station');
Route::get('get/list/station', ['uses' => 'AdminController@getListStation'])->name('get_list_Station');
Route::get('get/police/station/info', ['uses' => 'AdminController@getPoliceInfo'])->name('get_police_info');
Route::get('page/police/station/report/{id}', ['uses' => 'AdminController@submitStationReport'])->name('station_report_type');
Route::get('submit/incidents/report', ['uses' => 'AdminController@submitIncidentsReport'])->name('submit_incidents_report');

//HOSPITALS
Route::get('get/list/hospitals', ['uses' => 'AdminController@getListHospitals'])->name('get_list_Hospital');
Route::post('add/new/hospitals', ['uses' => 'AdminController@addNewHospitals'])->name('add_new_hospitals');
Route::get('get/hospital/info', ['uses' => 'AdminController@getHospitalInfo'])->name('get_hospital_info');

//DOCTORS
Route::post('add/new/doctors', ['uses' => 'AdminController@addNewDoctors'])->name('add_new_doctors');
Route::get('/page/doctor/{id}', ['uses' => 'AdminController@getDoctorList']);
Route::get('/page/doctor_profile/{id}', ['uses' => 'AdminController@getDoctorInfo']);
Route::get('/page/doctor_appointment/{id}', ['uses' => 'AdminController@getDoctorIdAppointment']);
Route::post('add/new/appointment', ['uses' => 'AppointmentController@addAppointment'])->name('add_new_appointment');


//POLICE SIDE SYSTEM PAGES
Route::get('/policeside/station_home', ['uses' => 'AdminController@policeStationDashboard'])->name('station_dashboard');
Route::get('/policeside/station_profile', ['uses' => 'AdminController@policeStationProfile'])->name('station_profile');
Route::get('/policeside/station_reports', ['uses' => 'AdminController@policeStationReports'])->name('station_reports');
Route::get('get/list/reports', ['uses' => 'PoliceStationAdminController@getListReports'])->name('get_list_Reports');
Route::post('update/statusreports', ['uses' => 'PoliceStationAdminController@UpdateReports'])->name('update_StatusReports');
Route::post('update/station_info', ['uses' => 'PoliceStationAdminController@UpdateStationInfo'])->name('update_station_info');
Route::POST('update/manager_info', ['uses' => 'PoliceStationAdminController@UpdateManagerInfo'])->name('update_manager_info');
// Route::get('/policeside/station_home', function () {
//     return view('police_side\station_index');
// });

/*Route::get('/policeside/station_profile', function () {
    return view('police_side\station_profile');
});

Route::get('/policeside/station_reports', function () {
    return view('police_side\station_reports');
});*/

/*Route::get('/policeside/station_notifications', function () {
    return view('police_side\station_notifications');
});
*/



//HOSPITAL SIDE SYSTEM PAGES

Route::get('/hospital/home', function () {
    return view('hospital_side\hospital_index');
});
Route::get('get/doctors/list', ['uses' => 'HospitalSytemController@getDoctorList'])->name('get_doctor_list');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Reports
Route::get('/submit/reports', 'ReportsController@submitReport');
Route::get('/get/reports', 'ReportsController@getReport');

/*
//Single Route
Route::resource('admin','StationController');

Route::post('/admin/home', 'StationController@save');*/


// Connected to Controller
Route::get('/adminSide/add_station', 'adminStationController@create');

Route::get('/adminSide/home', 'adminStationController@index');
Route::post('/adminSide/add_station', 'adminStationController@store')->name('adminStation');

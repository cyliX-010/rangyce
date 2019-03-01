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

/*FOR ADMIN USERS*/
//admin login link
Route::get('/admin/login', function () {
   return view('auth\adminLogin');

});

//Create Account Link
Route::get('/admin/register', function () {
    return view('auth\adminRegister');
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

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminStation;
use DB;


class adminStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['data'] = DB::table('police_stations')->get();
         if(count($data) > 0)
         {
            return view('administration.index', $data);
         }
         else
         {
             return view('administration.index');
         }

      

    }

    /**<
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('administration.addStation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
      

        $name = $request->input('name_of_station');
        $state = $request->input('state');
        $city = $request->input('city');
        $street = $request->input('street');
        $zip =  $request->input('zip');




        $data = array('name_of_station'=>$name, 'state'=>$state, 'city'=>$city, 'street'=>$street, 'zip'=>$zip, 
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now());

        if(DB::table('police_stations')->insert($data)){
            return redirect('adminSide/home')->with('message', 'Success!');
            
        }
        else{echo "not success";}
 
        
            
      


        




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}






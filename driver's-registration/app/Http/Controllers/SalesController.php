<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function driver_registration(){
        return view('SalesOfficer.driver_registration');
    }
    public function driver_form(Request $request){
        $driver=new Driver;
        $driver->vehicle_name=$request->vname;
        $driver->vehicle_type=$request->type;
        $driver->driver_name=$request->dname;
        $driver->driver_phone_number=$request->dnum;
        $driver->driver_email=$request->dmail;
        $driver->gender=$request->gender;
        $driver->user_id=Auth::user()->id;
        $plate_number=$request->pnum;
       if(Driver::where('plate_number',$plate_number)->exists()){
        return redirect()->back()->with('alert',' plate number aleady registered ');

       }
       else{
            $driver->plate_number=$request->pnum;
            $driver->save();
            return redirect()->back()->with('success','Driver registered successfully');
       }
            
       
    }
    public function records(){
      $id=Auth::user();
      $data=Driver::where('user_id',$id->id)->orderby('id','desc')->get();
        return view('SalesOfficer.records',compact('data'));
    }
   
    public function search(Request $request){
      
        $data=Driver::where('vehicle_name','LIKE','%'.$request->search.'%')->orwhere('driver_name','LIKE','%'.$request->search.'%')->orwhere('plate_number','LIKE','%'.$request->search.'%')->orwhere('driver_phone_number','LIKE','%'.$request->search.'%')->get();
        if(count($data) == 0){
            return redirect()->back()->with('success','No result was found');
    
         }
         else{
            return view('SalesOfficer.search_page',compact('data'))->with('success','The search results below');
         }
    }   
}

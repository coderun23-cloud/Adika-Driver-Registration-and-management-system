<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function driver_registration(){
        return view('SalesOfficer.driver_registration');
    }

    public function about(){
        return view('SalesOfficer.about');
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
      $data=Driver::where('user_id',$id->id)->orderby('id','asc')->get();
      $num=count($data);
        return view('SalesOfficer.records',compact('data','num'));
    }
   
    public function search(Request $request){
        $id=Auth::user();
        $data = Driver::where('user_id', $id->id)
        ->where(function($query) use ($request) {
            $query->orWhere('driver_name', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('plate_number', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('driver_phone_number', 'LIKE', '%'.$request->search.'%');
        })
        ->orderBy('id', 'desc')
        ->get();
            if(count($data) == 0){
            return redirect()->back()->with('success','No result was found');
    
         }
         else{
            return view('SalesOfficer.search_page',compact('data'))->with('success','The search results below');
         }
    }   
    public function asc_date(){
        $id=Auth::user();
        $data = Driver::where('user_id', $id->id)->orderBy('created_at', 'asc')->get();
        return view('SalesOfficer.asc_date',compact('data'));

    }
    public function vechile_type(){
        $id=Auth::user();
        $data = Driver::where('user_id', $id->id)->orderBy('plate_number', 'asc')->get();
        return  view('SalesOfficer.plate',compact('data'));
    }
    public function driver_name(){
        $id=Auth::user();
        $data = Driver::where('user_id', $id->id)->orderBy('driver_name', 'asc')->get();
        return view('SalesOfficer.driver_name',compact('data'));
    }
    public function message(){
        return view('SalesOfficer.contact');
    }
    
    public function sent_message(Request $request){
        $message=new Contact;
        $message->name=$request->name;
        $message->email=$request->email;
        $message->message=$request->desc;
        $message->save();
        return redirect()->back()->with('success','message sent successfully');
    }
}

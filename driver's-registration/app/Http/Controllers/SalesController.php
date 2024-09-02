<?php

namespace App\Http\Controllers;


use App\Models\KPI;
use App\Models\User;
use App\Models\Driver;
use App\Models\Contact;
use App\Models\Category;
use App\Mail\UserMessage;
use Illuminate\Http\Request;
use App\Models\sale_performance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SalesController extends Controller
{
    public function driver_registration(){
        $data=Category::all();
        return view('SalesOfficer.driver_registration',compact('data'));
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
    
    public function records(Request $request)
{
    $query = Driver::query()->where('user_id',Auth::id());

    // Search filter
    if ($request->has('search') && !empty($request->input('search'))) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('plate_number', 'like', "%$search%")
              ->orWhere('driver_name', 'like', "%$search%");
        });
    }

    // Date filter
    if ($request->has('filter_date') && !empty($request->input('filter_date'))) {
        $query->whereDate('created_at', $request->input('filter_date'));
    }

    // Status filter
    if ($request->has('status') && $request->input('status') != '') {
        $query->where('status', $request->input('status'));
    }

    // Sorting
    if ($request->has('sort') && !empty($request->input('sort'))) {
        $query->orderBy($request->input('sort'), 'asc');
    }

    // Execute the query and paginate the results
    $data = $query->paginate(6);

    // Return the view with data
    
    return view('SalesOfficer.records', compact('data'));
   
    }   
   public function showKpiDashboard()
{
    $salesOfficer = auth()->user();

    if (!$salesOfficer) {
        return redirect()->route('login')->with('error', 'Please log in first.');
    }

    // Retrieve KPIs based on type without user_id
    $kpis = [
        'daily' => KPI::where('kpi_type', 'daily')->latest()->first(),
        'weekly' => KPI::where('kpi_type', 'weekly')->latest()->first(),
        'monthly' => KPI::where('kpi_type', 'monthly')->latest()->first(),
    ];


  
    $dailyKpi = KPI::where('usertype', 'admin')->latest()->first();


    return view('SalesOfficer.kpi_dashboard', compact('kpis', 'dailyKpi'));
}


    

public function registerAchievedKpi(Request $request)
{
    $data=new KPI;
    $data->kpi_value=$request->number_of_registrations;
    $data->effective_date=$request->registration_date;
    $data->user_id=Auth::id();
    $data->save();

    
    return redirect()->route('salesofficer.kpiDashboard')->with('success', 'KPI achievement recorded successfully');
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
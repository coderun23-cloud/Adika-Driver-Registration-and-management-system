<?php

namespace App\Http\Controllers;


use App\Models\KPI;
use App\Models\User;
use App\Models\Driver;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Notifications\MyFirstNotification;
use Notification;

class AdminController extends Controller
{
    public function category_page(){
        $data=Category::all();
    
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){
        $data=new Category();
        $data->cat_title=$request->category;
        $data->save();
        return redirect()->back()->with('success','Category Added successfully');
    }
    public function cat_delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
    public function edit_category(Request $request,$id){
       $data=Category::find($id);
       return view('admin.edit_category',compact('data'));    
    }
    public function update_category(Request $request,$id){
        $data=Category::find($id);
        $data->cat_title=$request->cat_name;
        $data->save();
        return redirect('/category_page')->with('success','updated successfully');
    
    }
    public function driver_record(Request $request){
        $query = Driver::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }
    
        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }
    
        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('plate_number', 'like', '%' . $request->search . '%')
                  ->orWhere('driver_name', 'like', '%' . $request->search . '%');
            });
        }
    
        if ($request->has('sort_by') && $request->has('order')) {
            $query->orderBy($request->sort_by, $request->order);
        }
    
        $data = $query->paginate(6); // Adjust pagination as needed
    
        return view('admin.driver_record', compact('data'));
    }
    public function driver_approval(){
        $data=Driver::paginate(6);
        return view('admin.driver_approval',compact('data'));
    }
    public function approve_request($id){
        $data=Driver::find($id);
        $status=$data->status;
        if($status== 'approved'){
            return redirect()->back()->with('success','driver aleady approved');
        }
        else{
            $data->status='approved';
            $data->save();
            return redirect()->back()->with('success','driver approved');
        }
      
    }
  
public function reject_request($id){
    $data=Driver::find($id);
    $status=$data->status;
    if($status== 'rejected'){
        return redirect()->back()->with('alert','driver aleady rejected');
    }
    else{
        $data->status= 'rejected';
        $data->save();
        return redirect()->back()->with('alert','driver rejected');
    }

}
public function add_user(){
    $data=new Driver;
return view('admin.add_user');
}
public function register_user(Request $request){
   $data=new User;
   $data->name=$request->name;
   
   if($data->email == $request->email){
    return redirect()->back()->with('alert','Email already registered ');

   }
   else if(  $request->pass != $request->cpass){
    return redirect()->back()->with('alert','Passwords dont match');
   }
else{
 
   $data->email=$request->email;
   $data->password=$request->pass;
   $data->save();
    return redirect()->back()->with('success','Sales Officer registered successfully');
}
}
public function salesofficer(){
    $data=User::where('usertype','sales')->paginate(6);
    $num=1;
    return view('admin.salesofficer',compact('data','num'));
}



public function view_detail($id){
    $data=User::find($id);
    $count=Driver::where('user_id',$id)->count();
    $approve=Driver::where('user_id',$id)->where('status','approved')->count();
    $reject=Driver::where('user_id',$id)->where('status','rejected')->count();
    return view('admin.view_detail',compact('count','approve','reject','data'));
}
public function delete_user($id){
    $data=User::find($id);
      // Check if the driver exists
      if (!$data) {
        return redirect()->back()->with('error', 'Driver not found.');
    }
    $data->delete();
    return redirect()->back()->with('success','User deleted successfully');
}
public function edit_driver($id){
    $data=Driver::find($id);
    return view('admin.edit_driver',compact('data'));
}
public function delete_driver($id){
    $data=Driver::find($id);
   
  $data->delete();
  return redirect()->back()->with('success','Driver deleted successfully');
}
public function update_driver(Request $request, $id){
    $data = Driver::find($id);
    
    // Check if the driver exists
    if (!$data) {
        return redirect()->back()->with('alert', 'Driver not found.');
    }

    // Validate input data
    $request->validate([
        'vname' => 'required|string',
        'vtype' => 'required|string',
        'dname' => 'required|string',
        'phonenumb' => 'required|numeric',
        'email' => 'required|email',
        'user_id' => 'required|integer',
        'pnum' => 'required|string|unique:drivers,plate_number,' . $id
    ]);

    // Update the driver's details
    $data->vehicle_name = $request->vname;
    $data->vehicle_type = $request->vtype;
    $data->driver_name = $request->dname;
    $data->driver_phone_number = $request->phonenumb;
    $data->driver_email = $request->email;
    $data->user_id = $request->user_id;
    $data->plate_number = $request->pnum;

    // Save the updated driver data
    $data->save();

    // Redirect with success message
    return redirect('/driver_record')->with('success', 'Driver updated successfully');

}
public function send_mail(){
    $data = Contact::paginate(6);
    return view('admin.send_mail', compact('data'));
}
public function showAddKpiForm()
{
    $kpis = KPI::where('usertype','admin') // Assuming 'user' is the relationship to Sales Officers

    ->get();
    $num=1;

    return view('admin.add_kpi',compact('kpis','num'));
}

public function setKpi(Request $request)
{
   $data=new KPI;
   $data->kpi_type=$request->kpi_type;
   $data->kpi_value=$request->kpi_value;
   $data->effective_date=$request->effective_date;
   $data->usertype='admin';
   $data->user_id=Auth::id();
   $data->save();

    return redirect()->back()->with('success', 'KPI set successfully');
}
public function kpi_achievements()
{

    $kpis = KPI::where('usertype','sales_officer')->get();

    return view('admin.kpi_achievements', compact('kpis'));
}
// Show the edit form
public function editKpi($id)
{
    $kpi = KPI::findOrFail($id);
    return view('admin.edit_kpi', compact('kpi'));
}

// Update the KPI
public function updateKpi(Request $request, $id)
{
    $kpi = KPI::findOrFail($id);

    return redirect('/add_kpi')->with('success', 'KPI updated successfully.');
}

// Delete the KPI
public function deleteKpi($id)
{
    $kpi = KPI::findOrFail($id);
    $kpi->delete();

    return redirect()->back()->with('success', 'KPI deleted successfully.');
}
public function mail(Request $request,$id){
    $data=Contact::find($id);
    $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'action_text' => $request->text,
        'action_url' => $request->url,
        'endline' => $request->end,
    ];
    Notification::send($data,new MyFirstNotification($details) );
    return redirect()->back()->with('success','message sent successfully');
}

}

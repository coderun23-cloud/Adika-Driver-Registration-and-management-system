<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use App\Models\User;
use App\Models\Driver;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
         $usertype=Auth()->user()->usertype;
         if($usertype== 'admin'){
            $data=User::all()->count();
            $sales=User::where('usertype','sales')->count();
            $driver=Driver::all()->count();
            $approve=Driver::where('status','approved')->count();
            $reject=Driver::where('status','rejected')->count();
            $category=Category::all()->count();
             return view('admin.index',compact('data','sales','driver','approve','reject','category'));
 
        }
        else if($usertype== 'sales'){
       
         return view('Salesofficer.index');
     }
   
     else {
         return redirect()->back();
 
     }
 }
}
}

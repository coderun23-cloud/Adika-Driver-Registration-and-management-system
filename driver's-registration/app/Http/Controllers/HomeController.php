<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
         $usertype=Auth()->user()->usertype;
         if($usertype== 'admin'){
             return view('admin.index');
 
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

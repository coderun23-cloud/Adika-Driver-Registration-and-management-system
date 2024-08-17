<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function driver_registration(){
        return view('SalesOfficer.driver_registration');
    }
    public function driver_form(Request $request){
        
    }
}

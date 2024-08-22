<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Driver extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable=[
        'vehicle_name','vehicle_type','plate_number','driver_name','driver_phone_number','driver_email','gender','user_id',
    ];


}

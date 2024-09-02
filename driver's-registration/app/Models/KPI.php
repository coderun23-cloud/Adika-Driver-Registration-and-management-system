<?php

namespace App\Models;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KPI extends Model
{
    use HasFactory;
    protected $fillable = [
        'kpi_value',
        'kpi_type',
        'effective_date',
    ];
    public function driver(){
        return $this->belongsTo(Driver::class);
    }


public function user()
{
    return $this->belongsTo(User::class);
}

}

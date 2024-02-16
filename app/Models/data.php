<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $fillable =[
        "device_id",
        "time",
        "data",
        "event_id",
        "W_Temp1",
        "W_Temp2",
        "W_Temp3",
        "W_Temp4",
        "W_Temp5",
        "W_Temp6",
        "B_Temp1",
        "B_Temp2",
        "Vib1",
        "Vib2",
    ];
}

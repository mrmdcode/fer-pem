<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ["device_id","description","customer_id","agent_id","technition_id"];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = ['name', 'lastname', 'phone', 'email', 'date1', 'date2', 'date3', 'time1', 'autoinfo', 'service', 'message'];
    
}

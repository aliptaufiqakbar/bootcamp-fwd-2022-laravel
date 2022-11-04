<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
     //use HasFactory;
     use SoftDeletes;

     //Declare tables
     public $table = 'transaction';
 
     //This fields must be set type date yyyy-mm-dd hh:mm:ss
     private $dates = [
         'created_at', 
         'updated_at', 
         'deleted_at'
     ];
 
     protected $fillable = [
         'appointment_id',
         'fee_doctor',
         'fee_specialist',
         'fee_hospital',
         'sub_total',
         'vat',
         'total',
         'created_at',
         'updated_at',
         'deleted_at'
     ];

     public function appointment(){
        //3 parameters (path model, field foreign Key , field primary key from table hasMany/hasOne relationship)
        return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}

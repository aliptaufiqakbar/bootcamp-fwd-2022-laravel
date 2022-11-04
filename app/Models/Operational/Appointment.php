<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Appointment extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Declare tables
    public $table = 'appointment';

    //This fields must be set type date yyyy-mm-dd hh:mm:ss
    private $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}

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
    public function doctor(){
        //3 parameters (path model, field foreign Key , field primary key from table hasMany/hasOne relationship)
        return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }

    public function consultation(){
        //3 parameters (path model, field foreign Key , field primary key from table hasMany/hasOne relationship)
        return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }
    public function user(){
        //3 parameters (path model, field foreign Key , field primary key from table hasMany/hasOne relationship)
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    //One to One relationship
    public function transaction(){
        //2 parameters (path model, field foreignKey)
        return $this->hasOne('App\Models\Operational\Transaction','appointment_id');
    }
}

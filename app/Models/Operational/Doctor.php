<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Doctor extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Declare tables
    public $table = 'doctor';

    //This fields must be set type date yyyy-mm-dd hh:mm:ss
    private $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function specialist(){
        //3 parameters (path model, field foreign Key , field primary key from table hasMany/hasOne relationship)
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }
    //One to Many
    public function appointment(){
        //2 parameters (path model, field foreignKey)
        return $this->hasMany('App\Models\Operational\Appointment','doctor_id');
    }
}

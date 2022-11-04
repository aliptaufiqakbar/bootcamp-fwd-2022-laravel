<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Specialist extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Declare tables
    public $table = 'specialist';

    //This fields must be set type date yyyy-mm-dd hh:mm:ss
    private $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //One to Many
    public function doctor(){
        //2 parameters (path model, field foreignKey)
        return $this->hasMany('App\Models\Operational\Doctor.php','specialist_id');
    }
}

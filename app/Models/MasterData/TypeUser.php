<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TypeUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //Declare tables
    public $table = 'type_user';

    //This fields must be set type date yyyy-mm-dd hh:mm:ss
    private $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //One to Many
    public function detail_user(){
        //2 parameters (path model, field foreignKey)
        return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');
    }
}

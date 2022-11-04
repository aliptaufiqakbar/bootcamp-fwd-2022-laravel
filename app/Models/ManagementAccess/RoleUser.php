<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class RoleUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

     //Declare tables
     public $table = 'role_user';

     //This fields must be set type date yyyy-mm-dd hh:mm:ss
     private $dates = [
         'created_at', 
         'updated_at', 
         'deleted_at'
     ];
 
     protected $fillable = [
         'role_id',
         'user_id',
         'created_at',
         'updated_at',
         'deleted_at'
     ];
}

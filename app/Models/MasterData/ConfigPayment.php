<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class ConfigPayment extends Model
{
    //use HasFactory;
    use SoftDeletes;

     //Declare tables
     public $table = 'config_payment';

     //This fields must be set type date yyyy-mm-dd hh:mm:ss
     private $dates = [
         'created_at', 
         'updated_at', 
         'deleted_at'
     ];
 
     protected $fillable = [
         'fee',
         'vat',
         'created_at',
         'updated_at',
         'deleted_at'
     ];
}

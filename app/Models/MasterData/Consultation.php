<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Consultation extends Model
{
        //use HasFactory;
        use SoftDeletes;

        //Declare tables
        public $table = 'consultation';

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

         //One to Many relationship
        public function appointment(){
        //2 parameters (path model, field foreignKey)
        return $this->hasMany('App\Models\Operational\Appointment','consultation_id');
    }
}

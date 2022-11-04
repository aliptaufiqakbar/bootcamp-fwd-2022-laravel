<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Permission extends Model
{
    //use HasFactory;
    use softDeletes;

    //Declare tables
    public $table = 'permission';

    //This fields must be set type date yyyy-mm-dd hh:mm:ss
    private $dates = [
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}

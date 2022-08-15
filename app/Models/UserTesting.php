<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTesting extends Model
{
    use HasFactory;

    protected $table = 'user_testing';
    protected $primaryKey = 'User_id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    //if used time stamp we can changa timestam date formet
        //protected $dateFormat = 'U'; 

    //if chcnge datebase default table name CREATED_AT change like this creation_date 
        // const CREATED_AT = 'creation_date';
        // const UPDATED_AT = 'updated_date';
    
    protected $connection = 'mysql';
}

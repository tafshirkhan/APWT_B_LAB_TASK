<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primeryKey = 'user_id';
    public $timestamps = false;

    // const CREATED_AT = 'create_time';
    // const UPDATED_AT = 'update_time';
}

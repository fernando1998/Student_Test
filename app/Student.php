<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    
    protected $fillable = ['fullname', 'code', 'age', 'gender', 'photoUrl'];
    
    protected $hidden = ['created_at', 'updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCareer extends Model
{
    protected $table = 'student_careers';
    
    protected $fillable = ['student_id', 'career_id',];
    
    protected $hidden = ['created_at', 'updated_at'];
}

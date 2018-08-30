<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';
    
    protected $fillable = ['name', 'code',];
    
    protected $hidden = ['created_at', 'updated_at'];
}

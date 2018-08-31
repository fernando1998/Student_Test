<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnicalAbilities extends Model
{
    protected $table = "technical_abilities";
    
    protected $fillable = ['studentId', 'name', 'hours'];
}

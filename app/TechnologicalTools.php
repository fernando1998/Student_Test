<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnologicalTools extends Model
{
    protected $table = "technological_tools";

    protected $fillable = ['name' , 'level'];

    protected $hidden = ['created_at', 'updated_at'];

    public function student(){
        $this->belongsTo('App\Student');
    }
}

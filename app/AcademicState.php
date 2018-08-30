<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicState extends Model
{
    protected $table = "academic_states";
    
    protected $fillable = ['studentId', 'condition', 'statusCourse'] // ||Condition : 'regular', 'credito','becado' || statusCourse : ['all', '1cp', '2cp', '3cp', '+3cp'] // CP : Cursos pendientes
   
    protected $hidden = [ 'created_at', 'updated_at',];
   
    
    public function student(){
        
        $this->belongsTo('App\Student');
    }
}

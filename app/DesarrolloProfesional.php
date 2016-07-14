<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class DesarrolloProfesional extends Eloquent
{
    protected $primaryKey = '_id';
    protected $collection = 'desarrolloprofesional_collection';

    protected $fillable = ["empresaenlaquelaboro",
    						"puestoinicial",
    						"puestofinal",
    						"antiguedad",
    						"funcionesprincipales"];

            

    public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

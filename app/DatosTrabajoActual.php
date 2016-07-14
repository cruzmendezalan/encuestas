<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class DatosTrabajoActual extends Eloquent
{
    protected $primaryKey = '_id';
    protected $collection = 'datostrabajoactual_collection';

    protected $fillable = ["empresaenlaquelaboro",
    						"puestoinicial",
    						"puestofinal",
    						"antiguedad",
    						"funcionesprincipales"];

            

    public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

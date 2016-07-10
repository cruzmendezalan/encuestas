<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Egresado extends Eloquent
{
    protected $collection = 'egresados_collection';
    protected $primaryKey = '_id';

    /**
     * Egresado tiene un  IdentificacionEgresado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function identificacionegresado(){
    	return $this->embedsOne('encuestas\identificacionEgresado');
    }
    
    public function estudiosutm(){
        return $this->embedsOne('encuestas\EstudiosUTM');
    }

    public function datostrabajoactual(){
        return $this->embedsOne('encuestas\DatosTrabajoActual');
    }

    public function satisfacciondelaformacionprofesional(){
        return $this->embedsOne('encuestas\satisfaccionDeLaFormacionProfesional');
    }

    public function recomendacionesdelegresado(){
        return $this->embedsOne('encuestas\recomendacionesDelEgresado');
    }


}

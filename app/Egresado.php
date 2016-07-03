<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Egresado extends Eloquent
{
    protected $collection = 'egresados_collection';
    protected $primaryKey = '__id';

    /**
     * Egresado tiene un  IdentificacionEgresado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function identificacionegresado(){
    	return $this->embedsOne('encuestas\IdentificacionEgresado');
    }
    public function estudiosutm(){
        return $this->embedsOne('encuestas\EstudiosUTM');
    }
}

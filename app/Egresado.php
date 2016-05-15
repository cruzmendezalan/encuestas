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
    public function identificacionegresado()
    {
    	// hasOne(RelatedModel, foreignKeyOnRelatedModel = egresado_id, localKey = id)
    	return $this->embedsOne('encuestas\IdentificacionEgresado');
    }
}

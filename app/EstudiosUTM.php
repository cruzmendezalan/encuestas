<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EstudiosUTM extends Eloquent
{
    protected $primaryKey = '__id';
    protected $fillable = ["carrera",
                          	"ftitulacion",
                            "finiestudios",
                            "maestria",
                            "maestriatitulo",
                            "doctorado",
                            "doctoradotitulo"];
    /**
     * identificacionEgresado belongs to .
     * Relación 1 a 1, identificación del egresado con Egresado.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function egresado()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsTo('encuestas\Egresado');
    }
}

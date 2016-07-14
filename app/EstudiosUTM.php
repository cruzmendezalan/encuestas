<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EstudiosUTM extends Eloquent
{
    protected $primaryKey = '_id';
    protected $collection = 'estudiosutm_collection';
    protected $fillable = [ "carrera",
                          	"formadetitulacion",
                            "fechadeinicioestudios",
                            "fechadefinestudios",
                            "maestria",
                            "maestriatitulo",
                            "doctorado",
                            "doctoradotitulo"];
    /**
     * identificacionEgresado belongs to .
     * Relación 1 a 1, identificación del egresado con Egresado.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

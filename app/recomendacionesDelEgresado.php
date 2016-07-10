<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class recomendacionesDelEgresado extends Eloquent
{
    protected $primaryKey = '_id';
    protected $collection = 'recomendacionesdelegresado_collection';

    protected $fillable = ["recomendaciones"];

            

    public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

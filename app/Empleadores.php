<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Empleadores extends Eloquent
{
    protected $collection = 'empleadores_collection';
    
    public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

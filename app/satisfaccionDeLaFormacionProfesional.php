<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class satisfaccionDeLaFormacionProfesional extends Eloquent
{
    protected $primaryKey = '_id';
    protected $collection = 'satisfacciondelaformacionprofesional_collection';

    protected $fillable = [	'tiempoprimerempleo',
							'difucultadprimerempleo',
							'formacionrecibida',
							'carecesconocimientos',
							'habilidades',
							'habilidades',
							'carecesareasdeconocimiento',
							'carecesareasdeconocimiento',
							'valores',
							'calificacioninstalaciones',
							'serviciosescolares',
							'calificacionequipos',
							'calificacionlimpieza',
							'calificaciondocentes',
							'calificaciontecnicas',
							'calificacionevaluacion',
							'continuariasestudios'];

public function egresado(){
    	return $this->belongsTo('encuestas\Egresado');
    }
}

<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Empleadores extends Eloquent
{
    protected $collection = 'empleadores_collection';

    protected $primaryKey = '_id';
	protected $fillable = [ 'empresa',
							'jefe_inmediato',
							'puesto',
							'carrera',
							'puesto_egresado',
							'antiguedad',
							'conocimientos',
							'carece_conocimientos',
							'requiere_conocimientos',
							'habilidades',
							'no_habilidades',
							'carece_habilidades',
							'habilidades_importantes',
							'habilidades_no_demostradas',
							'factores_contratar',
							'factores_para_contratar',
							'continuar_contratando',
							'recomendaciones'];

}

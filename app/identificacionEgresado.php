<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class IdentificacionEgresado extends Eloquent
{
	//coleccion que servira a la persistencia de la identificacion del egresado (Parte 1  de la encuesta a egresados)
    protected $collection = 'identificacionEgresado_collection';
    protected $primaryKey = '__id';
    protected $fillable = ['fechaderespuesta',
                      'nombre',
                      'genero',
                      'fnac',
                      'nacionalidad',
                      'lorigen',
                      'ltrabajo',
                      'tcontacto',
                      'correoelectronico'];
    /**
     *
     * Campos que se registraran en esta colección, lado izquiero campo de la tabla ofrecida por Servicios Escolares, lado derecho nombre del atributo con el que se guardara en la base de datos.
     * 		[ 8 Atributos ]
     * Nombre 					---> nombre
     * Genero 					---> genero
     * Fecha de nacimiento		---> fnac
     * Lugar de origen 			---> lorigen
     * Lugar de trabajo			---> ltrabajo
     * Telefono de contacto		---> tcontacto
     * Correo Electronico 		---> correoelectronico
     *
     */
    
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

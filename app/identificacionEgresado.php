<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class identificacionEgresado extends Model
{
	//coleccion que servira a la persistencia de la identificacion del egresado (Parte 1  de la encuesta a egresados)
    protected $collection = 'identificacionEgresado_collection';
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
    
}

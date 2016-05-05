<?php

namespace encuestas;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pruebas extends Eloquent
{
    protected $collection = 'pruebas';
}

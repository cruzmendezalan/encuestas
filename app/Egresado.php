<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Egresado extends Eloquent
{
    protected $collection = 'egresados_collection';
}

<?php

namespace encuestas;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Egresados extends Eloquent
{
    protected $collection = 'egresados_collection';
}

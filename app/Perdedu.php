<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perdedu extends Model
{
    protected $connection = 'pgsql3';
    protected $table = 'trabajador_nomina_perdedu_base';
}

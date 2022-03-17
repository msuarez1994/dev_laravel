<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleFleet extends Model
{
    protected $connection = 'pgsql2';
    protected $table = 'pv';
}

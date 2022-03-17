<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelRecaudation extends Model
{
    public $timestamps = false;
    protected $fillable = ['deviceId','economico','latitude','longitude','cap','speed', 'date'];
    protected $table = "map_api";
}

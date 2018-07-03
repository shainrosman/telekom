<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'building_id', 'service_number',  'building_group',  'building_name', 'description', 'state', 'status',
    ];
}

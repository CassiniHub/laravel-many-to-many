<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'location_id'
    ];

    public function location() {
        return $this -> belongsTo('App\Location');
    }
}

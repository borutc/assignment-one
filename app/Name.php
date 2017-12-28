<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'id',
        'name',
        'surname'
    ];

    public function record() {
        return $this->hasMany('App\Record');
    }
}

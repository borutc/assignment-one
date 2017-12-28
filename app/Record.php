<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{


    protected $fillable = [
        'vehicleID',
        'sellerID',
        'name_id',
        'modelID',
        'saleDate',
        'buyDate'
    ];

    public function name() {
        return $this->belongsTo('App\Name');
    }

}

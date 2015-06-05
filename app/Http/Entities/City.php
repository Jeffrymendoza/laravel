<?php
/** **/
namespace App\Http\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends model {
    public function county ()
    {
        return $this->belongsTo('App\Http\Entities\County');
    }



}
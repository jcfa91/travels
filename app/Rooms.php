<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    protected $table = 'rooms';

    protected $primaryKey = 'id_room';

    public function Hotel()
    {
        return $this->belongsTo(Hotels::class, 'id_hotel');
    }

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    //
    protected $primaryKey = 'id_hotel';


    /**
     * Get the rooms for the Hotels.
     */
    public function Rooms()
    {
        return $this->hasMany(Rooms::class, 'id_hotel');
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'reservation', 'id', 'id_user');
    }


}

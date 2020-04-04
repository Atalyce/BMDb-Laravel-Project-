<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    // Buat comment (tapi belom jadi)
    public function sender()
    {
        return $this->hasOne('App\User','id','userid_sender');
    }

    public function receiver()
    {
        return $this->hasOne('App\User','id','userid_receiver');
    }
}

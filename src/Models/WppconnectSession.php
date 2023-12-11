<?php

namespace Eele94\Wppconnect\Models;

use Illuminate\Database\Eloquent\Model;

class WppconnectSession extends Model
{
    public $guarded = [];

    public function getFullAttribute()
    {
        return $this->session . ':' . $this->token;
    }
}

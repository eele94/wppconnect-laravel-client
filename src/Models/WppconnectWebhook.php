<?php

namespace Eele94\Wppconnect\Models;

use Illuminate\Database\Eloquent\Model;

class WppconnectWebhook extends Model
{
    public $guarded = [];
    protected $casts = [
        'data' => 'json',
    ];
}

<?php

namespace Eele94\Wppconnect\Models;

use Illuminate\Database\Eloquent\Model;

class WppconnectWebhook extends Model
{
    public $guarded = [];

    protected $casts = [
        'data' => 'json',
    ];

    public function wppSession()
    {
        return $this->belongsTo(WppconnectSession::class, 'session', 'session');
    }
}

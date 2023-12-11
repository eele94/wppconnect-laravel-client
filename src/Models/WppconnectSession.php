<?php

namespace Eele94\Wppconnect\Models;

use Eele94\Wppconnect\Facades\Wppconnect;
use Illuminate\Database\Eloquent\Model;
use Str;

class WppconnectSession extends Model
{
    public $guarded = [];

    public function getFullAttribute()
    {
        return $this->session.':'.$this->token;
    }

    public static function mySession()
    {
        return self::firstWhere('session', config('wppconnect.session'));
    }

    public function isLoggedIn()
    {
        $connectedStatusses = ['inChat'];
        return in_array($this->status, $connectedStatusses);
    }

    public function setQrCodeAttribute($value)
    {
        $prefix = "data:image/png;base64,";
        if ($value && !Str::startsWith($value, $prefix)) {
            $value = $prefix . $value;
        }
        $this->attributes['qr_code'] = $value;
    }

    public function logout()
    {
        WppConnect::auth()->logoutSession($this->session);
        WppConnect::auth()->closeSession($this->session);
    }

    public static function login(): static
    {
        $res = Wppconnect::auth()->startSession(config('wppconnect.session'), true);
        $input = [
            'status' => $res->json('status'),
            'version' => $res->json('version'),
            'qr_code' => $res->json('qrcode'),
            'url_code' => $res->json('urlcode'),
        ];
        if ($session = self::mySession()) {
            $session->update($input);
        } else {
            $session = self::create($input);
        }
        return $session;
    }
}

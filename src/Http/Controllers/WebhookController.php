<?php

namespace Eele94\Wppconnect\Http\Controllers;

use Eele94\Wppconnect\Models\WppconnectWebhook;
use Illuminate\Http\Request;

class WebhookController
{
    public function store(Request $request)
    {
        if ($request->secret !== config('wppconnect.secret_key')) {
            return response()->json(['error' => 'Invalid secret'], 403);
        }
        $payload = $request->except('secret');
        WppconnectWebhook::create([
            'session' => $request->session,
            'event' => $request->event,
            'data' => $payload,
        ]);

        return response('ok');
    }
}

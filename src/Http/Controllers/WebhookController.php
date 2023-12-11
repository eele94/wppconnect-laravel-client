<?php

namespace Eele94\Wppconnect\Http\Controllers;

use Eele94\Wppconnect\Facades\Wppconnect;
use Eele94\Wppconnect\Models\WppconnectWebhook;
use Illuminate\Http\Request;
use Str;

class WebhookController
{
    public function store(Request $request)
    {
        if ($request->secret !== config('wppconnect.secret_key')) {
            return response()->json(['error' => 'Invalid secret'], 403);
        }
        $payload = $request->except('secret');
        $webhook = WppconnectWebhook::create([
            'session' => $request->session,
            'event' => $request->event,
            'data' => $payload,
        ]);

        $method = Str::replace('-', '', $payload['event']);
        try {
            if (method_exists($this, $method)) {
                $this->$method($webhook);
            } else {
                $this->handleDefault($webhook);
            }
        } catch (\Throwable $th) {
            logger()->error($th->getMessage(), ['from' => 'WppWebhookController::handle', 'payload' => $payload]);
        }

        return response('ok');
    }

    public function handleDefault(WppconnectWebhook $webhook)
    {
        // logger()->warning('WppWebhookController::handleDefault', $webhook->toArray());
    }

    public function qrcode(WppconnectWebhook $webhook)
    {
        // todo: fetch qr code
        // $result = Wppconnect::auth()->qrcodeSession($webhook->session);

        // $webhook->wppSession->update([
        //     'status' => 'qrcode',
        //     'qr_code' => $webhook->data['qrcode'],
        //     'url_code' => $webhook->data['urlcode'],
        // ]);
    }

    public function statusfind(WppConnectWebhook $webhook)
    {
        $session = $webhook->wppSession;
        if (! $session) {
            return;
        }
        $status = $webhook->data['status'];
        $session->update([
            'status' => $status,
        ]);

        match ($status) {
            'qrReadSuccess' => $this->qrReadSuccess($webhook),
            'inChat' => $this->inChat($webhook),
            'notLogged' => $this->notLogged($webhook),
            'qrReadError' => $this->qrReadError($webhook),
            'browserClose' => $this->browserClose($webhook),
            'desconnectedMobile' => $this->browserClose($webhook),
        };

        $failed = ['qrReadError', 'browserClose'];
        if (in_array($status, $failed)) {
            // $session->delete();
        }
    }

    public function qrReadSuccess(WppconnectWebhook $webhook)
    {
    }

    public function inChat(WppconnectWebhook $webhook)
    {
    }

    public function notLogged(WppconnectWebhook $webhook)
    {
    }

    public function qrReadError(WppconnectWebhook $webhook)
    {
    }

    public function browserClose(WppconnectWebhook $webhook)
    {
    }
}

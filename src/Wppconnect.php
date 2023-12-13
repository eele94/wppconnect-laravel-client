<?php

namespace Eele94\Wppconnect;

use Eele94\Wppconnect\Api\Requests\Auth\GenerateToken;
use Eele94\Wppconnect\Events\Disconnected;
use Eele94\Wppconnect\Models\WppconnectSession;
use Saloon\Http\Auth\TokenAuthenticator;

// Extend from the generated file so that we can simply generate it again and keep the custom functionality
class Wppconnect extends \Eele94\Wppconnect\Api\Wppconnect
{
    private string $token;

    public function __construct()
    {
        $token = WppconnectSession::first()?->token;
        $session = config('wppconnect.session');
        if (!$token) {

            $request = new GenerateToken($session, config('wppconnect.secret_key'));
            $response = $request->send();
            $input = $response->json();
            WppconnectSession::updateOrCreate(
                ['session' => $input['session']],
                [
                    'token' => $input['token'],
                    'status' => $input['status'],
                ]
            );
            $token = $input['token'];
        }

        $this->token = $token;

        $this->middleware()->onResponse(function ($response) use ($session) {
            if ($response->failed()) {
                if ($response->json('status') === 'Disconnected') {
                    Disconnected::dispatch($session);
                    throw (new \Exception('Disconnected'));
                }
            }
        });
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    // Overwrite from config instead of generated file
    public function resolveBaseUrl(): string
    {
        return config('wppconnect.base_uri');
    }
}

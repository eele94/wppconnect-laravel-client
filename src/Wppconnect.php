<?php

namespace Eele94\Wppconnect;

use Eele94\Wppconnect\Api\Requests\Auth\GenerateToken;
use Eele94\Wppconnect\Models\WppconnectSession;
use Saloon\Http\Auth\TokenAuthenticator;

// Extend from the generated file so that we can simply generate it again and keep the custom functionality
class Wppconnect extends \Eele94\Wppconnect\Api\Wppconnect
{
    private string $token;

    public function __construct()
    {
        $token = WppconnectSession::first()?->token;
        if (! $token) {
            $session = 'eele_11_12_2023';

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

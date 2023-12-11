<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * qrcode-session (Pegar qrCode de autenticação via stream)
 */
class QrcodeSession extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/{$this->session}/qrcode-session";
    }

    public function __construct(
        protected string $session,
    ) {
    }
}

<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * check-connection-session (status da conexão)
 */
class CheckConnectionSession extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/{$this->session}/check-connection-session";
    }

    public function __construct(
        protected string $session,
    ) {
    }
}

<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * close-session
 */
class ClearSessionData extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/{$this->session}/{$this->secret}/clear-session-data";
    }

    public function __construct(
        protected string $session,
        protected string $secret,
    ) {
    }
}

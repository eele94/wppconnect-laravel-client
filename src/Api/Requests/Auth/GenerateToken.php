<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\SoloRequest;
use Saloon\Traits\Body\HasJsonBody;

/**
 * generate-token (Gera token Bearer para sessão)
 */
class GenerateToken extends SoloRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return config('wppconnect.base_uri')."/{$this->session}/{$this->secretkey}/generate-token";
    }

    public function __construct(
        protected string $session,
        protected string $secretkey,
    ) {
    }
}

<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Clear Chat
 */
class ClearChat extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
        protected mixed $phone = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['phone' => $this->phone]);
    }
}

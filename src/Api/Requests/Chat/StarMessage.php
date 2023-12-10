<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Star Message
 */
class StarMessage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
        protected mixed $messageId = null,
        protected mixed $star = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['messageId' => $this->messageId, 'star' => $this->star]);
    }
}

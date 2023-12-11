<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Mute
 */
class SendMute extends Request implements HasBody
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
        protected mixed $time = null,
        protected mixed $type = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['phone' => $this->phone, 'time' => $this->time, 'type' => $this->type]);
    }
}

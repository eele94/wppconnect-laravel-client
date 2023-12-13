<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Message
 */
class SendMessage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/{$this->session}/send-message";
    }

    public function __construct(
        protected string $session,
        protected mixed $phone = null,
        protected mixed $message = null,
        protected mixed $isGroup = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['phone' => $this->phone, 'message' => $this->message, 'isGroup' => $this->isGroup]);
    }
}

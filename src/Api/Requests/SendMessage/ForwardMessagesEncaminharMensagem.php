<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Forward Messages (Encaminhar mensagem)
 */
class ForwardMessagesEncaminharMensagem extends Request implements HasBody
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
        protected mixed $messageId = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['phone' => $this->phone, 'messageId' => $this->messageId]);
    }
}

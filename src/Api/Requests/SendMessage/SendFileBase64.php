<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send File Base64
 */
class SendFileBase64 extends Request implements HasBody
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
        protected mixed $base64 = null,
        protected mixed $isGroup = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['phone' => $this->phone, 'base64' => $this->base64, 'isGroup' => $this->isGroup]);
    }
}

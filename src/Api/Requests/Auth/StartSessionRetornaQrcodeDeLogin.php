<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * start-session (Retorna QRCode de login)
 */
class StartSessionRetornaQrcodeDeLogin extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/{$this->session}/start-session";
    }

    public function __construct(
        protected string $session,
        protected mixed $waitQrCode = null,
        protected mixed $webhook = null,
    ) {
        if (!$this->webhook) {
            $this->webhook = route('wppconnect.webhook.store', ['secret' => config('wppconnect.secret_key')]);
        }
    }

    public function defaultBody(): array
    {
        return array_filter(['webhook' => $this->webhook, 'waitQrCode' => $this->waitQrCode]);
    }
}

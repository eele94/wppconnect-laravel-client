<?php

namespace Eele94\Wppconnect\Api\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Check Number Status
 */
class CheckNumberStatus extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    /**
     * @param  string  $phone
     */
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

<?php

namespace Eele94\Wppconnect\Api\Requests\Profile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change Username
 */
class ChangeUsername extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
        protected mixed $name = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['name' => $this->name]);
    }
}

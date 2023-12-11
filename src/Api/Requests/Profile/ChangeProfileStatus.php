<?php

namespace Eele94\Wppconnect\Api\Requests\Profile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change Profile Status
 */
class ChangeProfileStatus extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
        protected mixed $status = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['status' => $this->status]);
    }
}

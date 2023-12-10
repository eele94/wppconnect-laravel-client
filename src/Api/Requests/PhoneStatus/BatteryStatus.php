<?php

namespace Eele94\Wppconnect\Api\Requests\PhoneStatus;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Battery status
 */
class BatteryStatus extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
    ) {
    }
}

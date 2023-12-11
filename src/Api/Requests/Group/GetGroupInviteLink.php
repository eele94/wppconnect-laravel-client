<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Group Invite Link
 */
class GetGroupInviteLink extends Request
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

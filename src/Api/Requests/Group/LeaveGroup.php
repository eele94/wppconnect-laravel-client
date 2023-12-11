<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Leave Group
 */
class LeaveGroup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/';
    }

    public function __construct(
        protected string $session,
        protected mixed $groupId = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['groupId' => $this->groupId]);
    }
}

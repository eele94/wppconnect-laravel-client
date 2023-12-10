<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Promote Participant
 */
class PromoteParticipant extends Request implements HasBody
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
        protected mixed $phone = null,
    ) {
    }

    public function defaultBody(): array
    {
        return array_filter(['groupId' => $this->groupId, 'phone' => $this->phone]);
    }
}

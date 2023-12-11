<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * All Chats
 */
class AllChats extends Request
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

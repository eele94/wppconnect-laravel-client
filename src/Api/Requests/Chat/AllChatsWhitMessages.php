<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * All Chats Whit Messages
 */
class AllChatsWhitMessages extends Request
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

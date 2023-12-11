<?php

namespace Eele94\Wppconnect\Api\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All Contacts
 */
class GetAllContacts extends Request
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

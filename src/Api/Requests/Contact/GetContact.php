<?php

namespace Eele94\Wppconnect\Api\Requests\Contact;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Contact
 */
class GetContact extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 */
	public function __construct(
		protected string $session,
	) {
	}
}

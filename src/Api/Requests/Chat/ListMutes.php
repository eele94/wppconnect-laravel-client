<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Mutes
 */
class ListMutes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $type
	 */
	public function __construct(
		protected string $session,
		protected mixed $type = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['type' => $this->type]);
	}
}

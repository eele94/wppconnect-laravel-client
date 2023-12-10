<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Chat By Id
 */
class ChatById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $phone
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone]);
	}
}

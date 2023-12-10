<?php

namespace Eele94\Wppconnect\Api\Requests\BlockList;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Block list
 */
class BlockList extends Request
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

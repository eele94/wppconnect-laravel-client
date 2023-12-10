<?php

namespace Eele94\Wppconnect\Api\Requests\BlockList;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Block contact
 */
class BlockContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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

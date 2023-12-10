<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Subscribe Presence Copy
 */
class SubscribePresenceCopy extends Request implements HasBody
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
	 * @param null|mixed $isGroup
	 * @param null|mixed $all
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
		protected mixed $isGroup = null,
		protected mixed $all = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone, 'isGroup' => $this->isGroup, 'all' => $this->all]);
	}
}

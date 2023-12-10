<?php

namespace Eele94\Wppconnect\Api\Requests\Chat;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set Typing
 */
class SetTyping extends Request implements HasBody
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
	 * @param null|mixed $value
	 * @param null|mixed $isGrup
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
		protected mixed $value = null,
		protected mixed $isGrup = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone, 'value' => $this->value, 'isGrup' => $this->isGrup]);
	}
}

<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Text Storie
 */
class SendTextStorie extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $text
	 */
	public function __construct(
		protected string $session,
		protected mixed $text = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['text' => $this->text]);
	}
}

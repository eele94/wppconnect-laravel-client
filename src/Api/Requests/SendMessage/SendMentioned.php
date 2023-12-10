<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Mentioned
 */
class SendMentioned extends Request implements HasBody
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
	 * @param null|mixed $message
	 * @param null|mixed $mentioned
	 * @param null|mixed $isGruop
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
		protected mixed $message = null,
		protected mixed $mentioned = null,
		protected mixed $isGruop = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone, 'message' => $this->message, 'mentioned' => $this->mentioned, 'isGruop' => $this->isGruop]);
	}
}

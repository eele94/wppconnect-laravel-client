<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Video Storie
 */
class SendVideoStorie extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $path
	 * @param null|mixed $caption
	 */
	public function __construct(
		protected string $session,
		protected mixed $path = null,
		protected mixed $caption = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['path' => $this->path, 'caption' => $this->caption]);
	}
}

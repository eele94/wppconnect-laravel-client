<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Link Preview
 */
class SendLinkPreview extends Request implements HasBody
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
	 * @param null|mixed $url
	 * @param null|mixed $caption
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
		protected mixed $url = null,
		protected mixed $caption = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone, 'url' => $this->url, 'caption' => $this->caption]);
	}
}

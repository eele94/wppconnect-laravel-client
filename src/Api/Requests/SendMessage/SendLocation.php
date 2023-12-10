<?php

namespace Eele94\Wppconnect\Api\Requests\SendMessage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send Location
 */
class SendLocation extends Request implements HasBody
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
	 * @param null|mixed $lat
	 * @param null|mixed $lng
	 * @param null|mixed $title
	 */
	public function __construct(
		protected string $session,
		protected mixed $phone = null,
		protected mixed $lat = null,
		protected mixed $lng = null,
		protected mixed $title = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['phone' => $this->phone, 'lat' => $this->lat, 'lng' => $this->lng, 'title' => $this->title]);
	}
}

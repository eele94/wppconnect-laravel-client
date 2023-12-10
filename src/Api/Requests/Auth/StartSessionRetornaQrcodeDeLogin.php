<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * start-session (Retorna QRCode de login)
 */
class StartSessionRetornaQrcodeDeLogin extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $webhook
	 * @param null|mixed $waitQrCode
	 */
	public function __construct(
		protected string $session,
		protected mixed $webhook = null,
		protected mixed $waitQrCode = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['webhook' => $this->webhook, 'waitQrCode' => $this->waitQrCode]);
	}
}

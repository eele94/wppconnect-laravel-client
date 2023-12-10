<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * status-session (Atualiza QRCode de login)
 */
class StatusSessionAtualizaQrcodeDeLogin extends Request
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

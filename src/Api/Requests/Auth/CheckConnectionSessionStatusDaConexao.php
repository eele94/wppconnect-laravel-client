<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * check-connection-session (status da conexão)
 */
class CheckConnectionSessionStatusDaConexao extends Request
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

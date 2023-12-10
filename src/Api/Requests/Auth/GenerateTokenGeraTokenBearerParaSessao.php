<?php

namespace Eele94\Wppconnect\Api\Requests\Auth;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * generate-token (Gera token Bearer para sessão)
 */
class GenerateTokenGeraTokenBearerParaSessao extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param string $secretkey
	 */
	public function __construct(
		protected string $session,
		protected string $secretkey,
	) {
	}
}

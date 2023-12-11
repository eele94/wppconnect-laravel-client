<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Join Group by Code
 */
class JoinGroupByCode extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $inviteCode
	 */
	public function __construct(
		protected string $session,
		protected mixed $inviteCode = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['inviteCode' => $this->inviteCode]);
	}
}
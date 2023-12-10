<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get Group Info From Invite Link
 */
class GetGroupInfoFromInviteLink extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $invitecode
	 */
	public function __construct(
		protected string $session,
		protected mixed $invitecode = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['invitecode' => $this->invitecode]);
	}
}

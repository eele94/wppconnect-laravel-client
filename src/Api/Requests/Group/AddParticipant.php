<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add Participant
 */
class AddParticipant extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $groupId
	 * @param null|mixed $phone
	 */
	public function __construct(
		protected string $session,
		protected mixed $groupId = null,
		protected mixed $phone = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['groupId' => $this->groupId, 'phone' => $this->phone]);
	}
}

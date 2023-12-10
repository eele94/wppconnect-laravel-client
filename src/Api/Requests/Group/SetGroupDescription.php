<?php

namespace Eele94\Wppconnect\Api\Requests\Group;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set Group Description
 */
class SetGroupDescription extends Request implements HasBody
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
	 * @param null|mixed $description
	 */
	public function __construct(
		protected string $session,
		protected mixed $groupId = null,
		protected mixed $description = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['groupId' => $this->groupId, 'description' => $this->description]);
	}
}

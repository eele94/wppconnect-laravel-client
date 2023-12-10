<?php

namespace Eele94\Wppconnect\Api\Requests\Profile;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change Profile Image
 */
class ChangeProfileImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/";
	}


	/**
	 * @param string $session
	 * @param null|mixed $path
	 */
	public function __construct(
		protected string $session,
		protected mixed $path = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['path' => $this->path]);
	}
}
